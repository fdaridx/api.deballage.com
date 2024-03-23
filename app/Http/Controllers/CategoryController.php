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
        $messages = [];
        if (!self::validate(strtolower($request->name), 'string', null, 3)) $messages[] = 'Nom incorrect';
        if (!self::validate(strtolower($request->description), 'string', null, 4)) $messages[] = 'Description incorrect';

        if (count($messages) == 0) {
            $category = Category::where('name', strtolower($request->name))->get();

            if ($category->isEmpty()) {
                if ($request->file('profile') == null || empty($request->file('profile'))) {
                    return response()->json(['message' => 'Veuillez renseignez une image !'], 500);
                } else {
                    Category::create([
                        'categorie_id' => $request->categorie_id ?? null,
                        'name' => strtolower($request->name),
                        'description' => strtolower($request->description),
                        'profile' => Storage::putFile('Category_image', $request->file('profile')),
                    ]);
                    return response()->json(['message' => 'Categorie crée avec succès !'], 200);
                }
                
            } else {
                return response()->json(['message' => 'Cette categorie existe déjà !'], 500);
            }
        } 
        else {
            return response()->json([
                'messages' => $messages,
            ], 500);
        }
    }

    public function show(Category $category)
    {
        // if (!Gate::allows('show', Auth::user())) abort(403);
        return response()->json($category, 200);
    }

    public function edit(Request $request)
    {
        
    }

    public function update(Request $request, Category $category)
    {
        return [$request->name, $request->description];
        // if (!Gate::allows('update', Auth::user())) abort(403);
        // $messages = [];
        // if (!self::validate(strtolower($request->name), 'string', null, 3)) $messages[] = 'Nom incorrect';
        // if (!self::validate(strtolower($request->description), 'string', null, 4)) $messages[] = 'Description incorrect';

        // if (count($messages) == 0) {
        //     $new_category = Category::where('name', strtolower($request->name))->get();

        //     if ($new_category->isEmpty()) {
        //         if ($request->file('profile') == null || empty($request->file('profile'))) {
        //             return response()->json(['message' => 'Veuillez renseignez une image !'], 500);
        //         } else {
        //             $category->update([
        //                 'categorie_id' => $request->categorie_id ?? null,
        //                 'name' => strtolower($request->name),
        //                 'description' => strtolower($request->description),
        //                 'profile' => Storage::putFile('images', $request->file('profile')),
        //             ]);
        //             return response()->json(['message' => 'Categorie modifiée avec succès !'], 200);
        //         }
                
        //     } else {
        //         return response()->json(['message' => 'Cette categorie existe déjà !'], 500);
        //     }
        // } 
        // else {
        //     return response()->json([
        //         'messages' => $messages,
        //     ], 500);
        // }
    }

    public function destroy(Category $category)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        $category->delete();
        return response()->json(['message' => 'Categorie supprimée avec succès !'], 200);
    }
}
