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
        return response()->json(Product::where('state', 'enabled')
            ->orWhere('state', 'init')->orderByDesc('name')->get(), 200);
    }

    public function create()
    {   
        
    }

    public function store(Request $request)
    {
        // if (!Gate::allows('store', Auth::user())) abort(403);
        $messages = [];
        if (!self::validate($request->name, 'string', null, 3)) $messages[] = 'Nom incorrect';
        if (!self::validate($request->description, 'string', null, 3)) $messages[] = 'Description incorrect';

        if (count($messages) == 0) {
            $product = Product::where([
                'categorie_id' => $request->categorie_id,
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
                return response(['message' => 'Produit enregistré avec succès !'],200);
            } else {
                return response(['message' => 'Ce produit existe déjà !'],500);
            }
        } else {
            return response()->json(['message' => $messages], 500);
        }     
            
    }

    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    public function edit(Request $request)
    {
        
    }

    public function update(Request $request, Product $product)
    {
        $messages = [];
        if (!self::validate($request->name, 'string', null, 3)) $messages[] = 'Nom incorrect';
        if (!self::validate($request->description, 'string', null, 3)) $messages[] = 'Description incorrect';

        if (count($messages) == 0) {
            $product = Product::where([
                'categorie_id' => $request->categorie_id,
                'name' => $request->name,
            ])->get();
    
            if ($product->isEmpty()) {
                $product->update([
                    'categorie_id' => $request->categorie_id,
                    'shop_id' => $request->shop_id,
                    'name' => $request->name,
                    'description' => $request->description,
                    'state' => 'enabled',
                    'price' => $request->price,
                    'special_price' => $request->special_price,
                    'info'  => $request->info ?? [],
                ]);
                
    
                if ($request->images !== null || !empty($request->images)) {
                    foreach ($request->images as $image) {
                        Image::create([
                            'product_id' => $product->id,
                            'path' => Storage::putFile('Product_image', $request->file($image)),
                        ]);
                    }
                }
                return response()->json(['message' => 'Produit modifié avec succès !'], 200);
            } else {
                return response(['message' => 'Ce produit existe déjà !'],500);
            }
        } else {
            return response()->json(['message' => $messages], 500);
        }  
    }

    public function destroy(Request $request)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        Product::find($request->id)->delete();
        return response()->json(['message' => 'Produit supprimé avec succès !'], 200);
    }

    public function option($option)
    {
        return response()->json(Product::where($option)->get(), 200);
    }
}
