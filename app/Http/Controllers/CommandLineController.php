<?php

namespace App\Http\Controllers;

use App\Models\CartLine;
use App\Models\CommandLine;
use App\Models\Notification;
use Illuminate\Http\Request;

class CommandLineController extends Controller
{

    public function index($id)
    {
        $commandlines = CommandLine::with('product')->where([
            'command_id' => $id,
            'state' => 'enabled',
        ])->orWhere('state', 'init')->get()->map(function ($commandline) {
            $commandline->edit_url = route('commandlines.edit', $commandline->id);
            $commandline->state_url = route('commandlines.state', $commandline->id);
            return $commandline;
        });
        return response()->json($commandlines, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $mesages = [];
        if (!intval($request->quantity) || intval($request->quantity) == 0) $messages[] = 'Veuillez entrez une quantité valide !';
        if ($request->product_id == null || empty($request->product_id)) $messages[] = 'Veuillez choisir un produit !';

        if (count($mesages) == 0) {
            $commandLine = CommandLine::create([
                'product_id' => $request->product_id, 
                'command_id' => $request->id, 
                'quantity' => $request->quantity, 
                'attributes_values' => $request->attributes_values ?? []
            ]);

            CartLine::create([
                'product_id' => $request->product_id, 
                'command_id' => $request->id, 
                'quantity' => $request->quantity, 
                'attributesValues' => $request->attributes_values ?? [],
                'cart_id' => $commandLine->command->user->cart->id,
                'state' => 'enabled'
            ]);
            return response()->json(['messages' => "Produit ajouté avec succès"], 500);
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(CommandLine $commandLine)
    {
        //
    }

    public function edit(CommandLine $commandLine)
    {
        //
    }

    public function update(Request $request, CommandLine $commandLine)
    {
        $mesages = [];
        if (!intval($request->quantity) || intval($request->quantity) == 0) $messages[] = 'Veuillez entrez une quantité valide !';
        if ($request->product_id == null || empty($request->product_id)) $messages[] = 'Veuillez choisir un produit !';

        if (count($mesages) == 0) {

            try {
                CartLine::where([
                    'product_id' => $commandLine->product_id, 
                    'quantity' => $commandLine->quantity, 
                    'attributesValues' => json_encode($commandLine->attributes_values),
                    'cart_id' => $commandLine->command->user->cart->id,
                    'state' => 'enabled'
                ])->first()->update([
                    'product_id' => $request->product_id, 
                    'quantity' => $request->quantity, 
                    'attributesValues' => $request->attributes_values ?? [],
                    'cart_id' => $commandLine->command->user->cart->id,
                    'state' => 'enabled'
                ]);
    
                $commandLine->update([
                    'product_id' => $request->product_id, 
                    'command_id' => $request->id, 
                    'quantity' => $request->quantity, 
                    'attributes_values' => $request->attributes_values ?? []
                ]);
            } catch (\Throwable $th) {
                $commandLine->update([
                    'product_id' => $request->product_id, 
                    'command_id' => $request->id, 
                    'quantity' => $request->quantity, 
                    'attributes_values' => $request->attributes_values ?? []
                ]);
            }
           
            return response()->json(['messages' => "Produit modifié avec succès !"], 200);
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function destroy(CommandLine $commandLine)
    {
        //
    }

    public function state(Request $request, CommandLine $commandLine)
    {
        // $commandLine = CommandLine::find($request->id);
        switch ($request->state) {
            case 'confirmed':
                // La ligne de commande passe à enabled pour notifier que le seller accepte de livrer le produit
                // La Commande passe à enabled
                $commandLine->update(['state' => 'enabled']);
                $commandLine->command->update(['state' => 'enabled']);

                Notification::create([
                    'user_id' => $commandLine->command->user_id,
                    'text' => $request->message ?? 'Commande pour le produit '. $commandLine->product->name .' confirmé par le vendeur',
                    'type' => 'user', 
                    'state' => 'init', 
                ]);
                return response()->json(['message' => 'Commande confirmée avec succès !'], 200);
            break;

            case 'delivered':
                // La ligne de commande passe à disabled pour notifier que le seller a livré le produit
                $commandLine->update(['state' => 'disabled', 'delivered_at' => now()]);

                // On modifie ici l'etat de la commande si toutes ses lignes de commande sont à disabled
                $commandLine->command->commandlines->where('state', 'disabled')->all()->count() 
                !== $commandLine->command->commandlines()->count() ?: $commandLine->command->update(['state' => 'disabled']);

                // Ensuite on recherche la ligne du panier correspondant à la ligne de la commande qu'on supprimera
                
                try {
                    CartLine::where([
                        'product_id' => $commandLine->product_id, 
                        'quantity' => $commandLine->quantity, 
                        'attributesValues' => json_encode($commandLine->attributes_values), 
                        'state' => 'enabled', 
                    ])->first()->delete();
                } catch (\Throwable $th) { }

                Notification::create([
                    'user_id' => $commandLine->command->user_id,
                    'text' => $request->message ?? 'La commande pour le produit '. $commandLine->product->name .' a été livrée avec succès',
                    'type' => 'user', 
                    'state' => 'init', 
                ]);
                return response()->json(['message' => 'Commande délivrée avec succès !'], 200);
            break;

            case 'cancel':
                /* Je recupere la commande afin de la supprimer juste apres la suppression de la ligne de commande 
                si toutes ces ligne ont été supprimé 
                */
                $command = $commandLine->command;
                // On recherche la ligne du panier correspondant à la ligne de la commande qu'on remettra a init car la commande a été annulé
                try {
                    CartLine::where([
                        'product_id' => $commandLine->product_id, 
                        'quantity' => $commandLine->quantity, 
                        'attributesValues' => json_encode($commandLine->attributes_values), 
                        'state' => 'enabled', 
                    ])->first()->update(['state' => 'init']);
                } catch (\Throwable $th) { }

                // Ensuite on supprime la ligne de la commande
                $commandLine->delete();
                $command->commandlines->count() !== 0 ?: $command->delete();                

                Notification::create([
                    'user_id' => $commandLine->product->shop->user->id,
                    'text' => $request->message ?? 'La commande pour le produit '. $commandLine->product->name .' a été annulée',
                    'type', 'seller'
                ]);
                return response()->json(['message' => 'Commande annulée avec succès !'], 200);
            break;
        }
    }
}
