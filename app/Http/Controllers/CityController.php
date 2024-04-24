<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('country')->orderByDesc('id')->get()->map(function ($city) {
            $city->edit_url = route('cities.edit', $city->id);
            return $city;
        });
        return response()->json($cities, 200);
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
            City::create([
                'countrie_id' => $request->countrie_id,
                'name' => strtolower($request->name),
            ]);

            // if ($city->wasRecentlyCreated) {
            //     return response()->json(['message' => 'City crée avec succès !'], 200);
            // } else {
            //     return response()->json(['message' => 'Ce city existe déjà !'], 500);
            // }
            return response()->json(['message' => 'City crée avec succès !'], 200);

            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(City $city)
    {
        //
    }

    public function edit(City $city)
    {
        //
    }

    public function update(Request $request, City $city)
    {
        $messages = [];
        $new_city = City::where('name', $request->name)->get();
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            if ($new_city->isEmpty()) {
                $city->update(['name' => $request->name, $request->countrie_id]);
                return response()->json(['message' => 'City modifié avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Ce city existe déjà !'], 500);
            }            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function destroy(City $city)
    {
        //
    }
}
