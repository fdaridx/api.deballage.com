<?php

namespace App\Http\Controllers;

use App\Models\Atribute;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAtributeRequest;
use App\Http\Requests\UpdateAtributeRequest;

class AtributeController extends Controller
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
        $messages = [];
        return $request->name;
        
        if ($request->name == null || empty($request->atribute_id)) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            $atribute = Atribute::firstOrCreate([
                'name' => strtolower($request->name),
            ], [
                'name' => strtolower($request->name),
            ]);

            if ($atribute->wasRecentlyCreated) {
                return response()->json(['message' => 'Attribut crée avec succès !'], 500);
            } else {
                return response()->json(['message' => 'Cet attribut existe déjà !'], 500);
            }
            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(Atribute $atribute)
    {
        //
    }

    public function edit(Atribute $atribute)
    {
        //
    }

    public function update(Request $request, Atribute $atribute)
    {
        //
    }

    public function destroy(Atribute $atribute)
    {
        //
    }
}
