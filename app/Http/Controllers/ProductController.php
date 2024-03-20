<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // if (!Gate::allows('viewAny', Auth::user())) abort(403);
        return response()->json(Product::orderByDesc('name')->get(), 200);
    }

    public function create()
    {   
        
    }

    public function store(Request $request)
    {
        // if (!Gate::allows('store', Auth::user())) abort(403);
        $product = Product::where([
            'categorie_id' => $request->name,
            'name' => $request->name,
        ])->get();

        if ($product->isEmpty()) {
            $product = Product::create([
                'categorie_id' => $request->categorie_id,
                'shop_id' => $request->shop_id,
                'name' => $request->name,
                'description' => $request->description ?? '',
                'state' => 'init',
                'price' => $request->price,
                'special_price' => $request->special_rice ?? null,
                'info'  => $request->info  ?? [],
            ]);

            if ($request->images !== null || !empty($request->images)) {
                foreach ($request->images as $image) {
                    Image::create([
                        'product_id' => $product->id,
                        'path' => Storage::putFile('Product_image', $request->file($image)),
                    ]);
                }
            }
            return response(['message' => 'Produit enregistré avec succès !'],500);
        } else {
            return response(['message' => 'Ce produit existe déjà !'],500);
        }
        
            
    }

    public function show(Request $request)
    {
        return response()->json(Product::find($request->id), 200);
    }

    public function edit(Request $request)
    {
        // if (!Gate::allows('edit', Auth::user())) abort(403);
        return response()->json(Product::find($request->id), 200);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->update([
            'categorie_id' => $request->categorie_id ?? $product->categorie_id,
            'shop_id' => $request->shop_id ?? $product->shop_id,
            'name' => $request->name ?? $product->name,
            'description' => $request->description ?? $product->description,
            'state' => $request->state ?? $product->state,
            'price' => $request->price ?? $product->price,
            'special_rice' => $request->special_rice ?? $product->special_rice,
            'info'  => $request->info ?? $product->info,
        ]);
        return response()->json(['message' => 'Produit modifié avec succès !'], 200);
    }

    public function destroy(Request $request)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        Product::find($request->id)->delete();
        return response()->json(['message' => 'Produit supprimé avec succès !'], 200);
    }
}
