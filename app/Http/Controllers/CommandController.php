<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\City;
use App\Models\User;
use App\Models\Qwater;
use App\Models\Command;
use App\Models\Country;
use App\Models\CommandLine;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $qwater = $city = $country = $commande = null;

        // Ce bloc de code a pour objectif de creer le quartier et passer la  commande
        if($request->qwater_id == null || empty($request->qwater_id)) {
            if ($request->city_id == null || empty($request->city_id)) {
                if ($request->country_id == null || empty($request->country_id)) {
                    $country = Country::create(['name' => $request->country_name]);
                    $city = City::create([
                        'name' => $request->city_name, 
                        'countrie_id' => $country->id 
                    ]);
                    $qwater = Qwater::create([
                        'name' => $request->qwater_name, 
                        'citie_id' => $city->id 
                    ]);
                }
                else {
                    $city = City::create([
                        'name' => $request->city_name, 
                        'countrie_id' => $request->country_id
                    ]);
                    $qwater = Qwater::create([
                        'name' => $request->qwater_name, 
                        'citie_id' => $city->id 
                    ]);
                }
            }
            else {
                $qwater = Qwater::create([
                    'name' => $request->qwater_name, 
                    'citie_id' => $request->city_id,
                ]);
            }

            $commande = Command::create([
                'qwater_id' => $qwater->_id, 
                'payment_id' => $request->payment_id ?? null,
                'user_id' => Auth::user()->id, 
                'state' => 'init',
            ]);
        }
        // ayant l'id du quartier, on passe juste la commande
        else {
            $commande = Command::create([
                'qwater_id' => $request->qwater_id, 
                'payment_id' => $request->payment_id ?? null,
                'user_id' => Auth::user()->id, 
                'state' => 'init',
            ]);
        }

        // Une fois la commande crée on doit chargé les produits commandés dans la commande
        // Pour cela on se sert du panier et on recupera toutes les lignes du panier qu'on chargera dans la commande
        foreach (Auth::user()->cart->cartlines as $cartline) {
            CommandLine::create([
                'product_id' => $cartline->product_id, 
                'command_id' => $commande->id, 
                'quantity' => $cartline->quantity, 
                'attributes_values' =>  $cartline->attributesValues, 
            ]);
            // Je modifie l'etat des lignes du panier à enabled car la commande n'a pas encore ete validé
            $cartline->update(['state' => 'enabled']);
        }

        // On envoie une notification a tous les admin
        foreach (User::where('type', 'admin')->get() as $u) {
            Notification::create([
                'user_id' => $u->id, 
                'text' => 'Nouvelle commande initié', 
                'type' => 'admin',
                'state' => 'init',
            ]);
        }

        response()->json(['message' => 'commande inité avec succès'], 200);
                
    }

    public function show(Command $command)
    {
        //
    }

    public function edit(Command $command)
    {
        //
    }

    public function update(Request $request, Command $command)
    {
        //
    }

    public function destroy(Request $request)
    {
        Command::find($request->id)->delete();
        response()->json(['message' => 'Commande supprimé avec succès !'], 200);
    }

    public function usersHistory ()   
    {
        return response()->json(Auth::user()->commandes->where('state', 'disabled'), 200);
    }

    public function state (Request $request)   
    {
        $command = Command::find($request->id);
        switch ($request->state) {
            case 'confirmed':
                $command->update(['state' => 'enabled']);
                foreach ($command->user->cart->cartlines as $cartline) {
                    $cartline->delete();
                }
                Notification::create([
                    'user_id' => $command->user->id,
                    'text' => $request->message,
                    'type', 'user'
                ]);
            break;

            case 'delivered':
                $command->update(['state' => 'disabled', 'delivered_at' => now()]);
                Notification::create([
                    'user_id' => $command->user->id,
                    'text' => $request->message,
                    'type', 'user'
                ]);
            break;

            case 'cancel':
                foreach ($command->user->cart->cartlines as $cartline) {
                    $cartline->update(['state' => 'init']);
                }
                Notification::create([
                    'user_id' => $command->commandlines[0]->product->shop->user->id,
                    'text' => "J'ai anuulé ma commande",
                    'type', 'user'
                ]);
                $command->delete();
            break;
        }
    }
}
