<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        // if (!Gate::allows('viewAny', Auth::user())) abort(403);
        return response()->json(Category::orderByDesc('name')->get(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // if (!Gate::allows('store', Auth::user())) abort(403);
        $category = Category::where('name', $request->name)->get();
        if ($category->isEmpty) {
            if ($request->file('profile') == null || empty($request->file('profile'))) {
                return response()->json(['message' => 'Veuillez renseignez une image !'], 500);
            } else {
                Category::create([
                    'categorie_id' => $request->categorie_id ?? null,
                    'name' => $request->name,
                    'description' =>  $request->description,
                    'profile' => Storage::putFile('Category_image', $request->file('profile')),
                ]);
                return response()->json(['message' => 'Categorie crée avec succès !'], 200);
            }
            
        } else {
            return response()->json(['message' => 'Cette categorie existe déjà !'], 500);
        } 
    }

    public function show(Request $request)
    {
        // if (!Gate::allows('show', Auth::user())) abort(403);
        return response()->json(Category::find($request->id), 200);
    }

    public function edit(Request $request)
    {
        // if (!Gate::allows('edit', Auth::user())) abort(403);
        return response()->json(Category::find($request->id), 200);
    }

    public function update(Request $request)
    {
        // if (!Gate::allows('update', Auth::user())) abort(403);
        if ($request->file('profile') == null || empty($request->file('profile'))) {
            Category::find($request->id)->update([
                'categorie_id' => $request->categorie_id ?? null,
                'name' => $request->name,
                'description' =>  $request->description,   
            ]);
            return response()->json(['message' => 'Categorie modifiée avec succès !'], 200);
        } 
        else {
            Category::find($request->id)->update([
                'categorie_id' => $request->categorie_id ?? null,
                'name' => $request->name,
                'description' =>  $request->description,
                'profile' => Storage::putFile('images', $request->file('profile')),
            ]);
            return response()->json(['message' => 'Categorie modifiée avec succès !'], 200);
        }
    }

    public function destroy(Request $request)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        Category::find($request->id)->delete();
        return response()->json(['message' => 'Categorie supprimée avec succès !'], 200);
    }
}
