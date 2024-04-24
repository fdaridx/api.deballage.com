<?php

namespace App\Http\Controllers;

use App\Models\Atribute;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAtributeRequest;
use App\Http\Requests\UpdateAtributeRequest;
use Attribute;

class AtributeController extends Controller
{
    public function index()
    {
        $atributes = Atribute::orderByDesc('id')->get()->map(function ($atribute) {
            $atribute->edit_url = route('attributes.edit', $atribute->id);
            return $atribute;
        });
        return response()->json($atributes, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $messages = [];
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            $atribute = Atribute::firstOrCreate([
                'name' => strtolower($request->name),
            ], [
                'name' => strtolower($request->name),
            ]);

            if ($atribute->wasRecentlyCreated) {
                return response()->json(['message' => 'Attribut crée avec succès !'], 200);
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

    public function update(Request $request, Atribute $attribute)
    {
        $messages = [];
        $new_attribute = Atribute::where('name', $request->name)->get();
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            if ($new_attribute->isEmpty()) {
                $attribute->update(['name' => $request->name]);
                return response()->json(['message' => 'Attribut modifié avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Cet attribut existe déjà !'], 500);
            }            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function destroy(Atribute $atribute)
    {
        //
    }
}
