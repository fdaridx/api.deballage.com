<?php

namespace App\Http\Controllers;

use App\Models\Qwater;
use Illuminate\Http\Request;

class QwaterController extends Controller
{
    public function index()
    {
        $qwaters = Qwater::with('city')->orderByDesc('id')->get()->map(function ($qwater) {
            $qwater->edit_url = route('qwaters.edit', $qwater->id);
            return $qwater;
        });
        return response()->json($qwaters, 200);
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
            $qwater = Qwater::firstOrCreate([
                'name' => strtolower($request->name),
            ], [
                'citie_id' => $request->citie_id,
                'name' => strtolower($request->name),
            ]);

            if ($qwater->wasRecentlyCreated) {
                return response()->json(['message' => 'Qwater crée avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Ce qwater existe déjà !'], 500);
            }
            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(Qwater $qwater)
    {
        //
    }

    public function edit(Qwater $qwater)
    {
        //
    }

    public function update(Request $request, Qwater $qwater)
    {
        $messages = [];
        $new_qwater = Qwater::where('name', $request->name)->get();
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            if ($new_qwater->isEmpty()) {
                $qwater->update(['name' => $request->name, $request->citie_id]);
                return response()->json(['message' => 'Qwater modifié avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Ce qwater existe déjà !'], 500);
            }            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function destroy(Qwater $qwater)
    {
        //
    }
}
