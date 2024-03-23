<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
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
        if ($request->atribute_id == null || empty($request->atribute_id)) {
            $messages[] = "Veuillez renseigner un attribut";
        }

        if ($request->value == null || empty($request->atribute_id)) {
            $messages[] = "Veuillez renseigner une valeur";
        }

        if (count($messages) == 0) {
            $property = Property::firstOrCreate([
                'atribute_id' => $request->atribute_id,
                'value' => strtolower($request->value),
            ], [
                'atribute_id' => $request->atribute_id,
                'value' => strtolower($request->value),
            ]);

            if ($property->wasRecentlyCreated) {
                response()->json(['message' => 'Propriété crée avec succès !'], 500);
            } else {
                response()->json(['message' => 'Cette propriété existe déjà !'], 500);
            }
            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(Property $property)
    {
        //
    }

    public function edit(Property $property)
    {
        //
    }

    public function update(Request $request, Property $property)
    {
        //
    }

    public function destroy(Property $property)
    {
        //
    }
}
