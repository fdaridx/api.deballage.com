<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::orderByDesc('id')->get()->map(function ($country) {
            $country->edit_url = route('countries.edit', $country->id);
            return $country;
        });
        return response()->json($countries, 200);
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
            $country = Country::firstOrCreate([
                'name' => strtolower($request->name),
            ], [
                'name' => strtolower($request->name),
            ]);

            if ($country->wasRecentlyCreated) {
                return response()->json(['message' => 'Country crée avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Ce country existe déjà !'], 500);
            }
            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(Country $country)
    {
        //
    }

    public function edit(Country $country)
    {
        //
    }

    public function update(Request $request, Country $country)
    {
        $messages = [];
        $new_country = Country::where('name', $request->name)->get();
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            if ($new_country->isEmpty()) {
                $country->update(['name' => $request->name]);
                return response()->json(['message' => 'Country modifié avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Ce country existe déjà !'], 500);
            }            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return response(200);
    }
}
