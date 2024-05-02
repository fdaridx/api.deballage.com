<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // if (!Gate::allows('viewAny', Auth::user())) abort(403);
        $products = Product::with([
            'category', 'shop', 'images', 'attributes' => function ($query) {
                $query->select([
                    'atributes.*', 
                    DB::raw('CONCAT("/attributes/edit/", atributes.id) AS edit')
                ]);
            },
        ])->orderByDesc('id')->get()->map(function ($product) {
            $product->edit_url = route('products.edit', $product->id);
            $product->attribute_url = route('products.attribute', $product->id);
            return $product;
        });
        return response()->json($products, 200);
    }

    public function userindex()
    {
        // if (!Gate::allows('viewAny', Auth::user())) abort(403);
        $products = Product::with([
            'category', 'shop', 'images', 'attributes' => function ($query) {
                $query->select([
                    'atributes.*', 
                    DB::raw('CONCAT("/attributes/edit/", atributes.id) AS edit')
                ]);
            },
        ])->where('shop_id', 1)->orderByDesc('id')->get()->map(function ($product) {
            $product->edit_url = route('user.products.edit', $product->id);
            $product->attribute_url = route('user.products.attribute', $product->id);
            return $product;
        });
        return response()->json($products, 200);
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
                'category_id' => $request->category_id,
                'name' => $request->name,
            ])->get();
    
            if ($product->isEmpty()) {
                $product = Product::create([
                    'category_id' => $request->category_id,
                    'shop_id' => $request->shop_id,
                    'name' => $request->name,
                    'description' => $request->description ?? '',
                    'state' => 'init',
                    'price' => $request->price,
                    'special_price' => $request->special_price ?? null,
                    'info'  => $request->info  ?? [],
                ]);
    
                for ($i=0; $i < intval($request->i); $i++) { 
                    Image::create([
                        'product_id' => $product->id,
                        'path' => $request->file('image_'. $i)->storeAs('', $request->file('image_'. $i)->getClientOriginalName()),
                    ]);
                }
                return response(['message' => 'Produit enregistré avec succès !'],200);
            } else {
                return response(['message' => 'Ce produit existe déjà !'],500);
            }
        } else {
            return response()->json(['message' => $messages], 500);
        }     
    }

    public function userstore(Request $request)
    {
        // if (!Gate::allows('store', Auth::user())) abort(403);
        $messages = [];
        if (!self::validate($request->name, 'string', null, 3)) $messages[] = 'Nom incorrect';
        if (!self::validate($request->description, 'string', null, 3)) $messages[] = 'Description incorrect';

        if (count($messages) == 0) {
            $product = Product::where([
                'category_id' => $request->category_id,
                'name' => $request->name,
            ])->get();
    
            if ($product->isEmpty()) {
                $product = Product::create([
                    'category_id' => $request->category_id,
                    'shop_id' => 1,
                    'name' => $request->name,
                    'description' => $request->description ?? '',
                    'state' => 'init',
                    'price' => $request->price,
                    'special_price' => $request->special_price ?? null,
                    'info' => [
                        'quantite' => $request->quantite
                    ] ?? [],
                ]);
    
                for ($i=0; $i < intval($request->i); $i++) { 
                    Image::create([
                        'product_id' => $product->id,
                        'path' => $request->file('image_'. $i)->storeAs('', $request->file('image_'. $i)->getClientOriginalName()),
                    ]);
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
        return response()->json($product->with(['category', 'shop', 'attributes' => function ($query) {
            $query->select([
                'atributes.*', 
                DB::raw('CONCAT("/attributes/edit/", atributes.id) AS edit')
            ]);
        }])->where('id', $product->id)->first(), 200);
    }

    public function edit(Request $request)
    {
        
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'category_id' => $request->category_id,
            'shop_id' => $request->shop_id,
            'name' => $request->name,
            'description' => $request->description,
            'state' => 'enabled',
            'price' => doubleval($request->price),
            'special_price' => doubleval($request->special_price),
            'info'  => $request->info ?? [],
        ]);
        
        if ($request->file('image_0') !== null || $request->file('image_0') !== 'undefined' || !empty($request->file('image_0'))) {
            foreach ($product->images as $image) { $image->delete(); }
            for ($i=0; $i < intval($request->i); $i++) { 
                Image::create([
                    'product_id' => $product->id,
                    'path' => $request->file('image_'. $i)->storeAs('', $request->file('image_'. $i)->getClientOriginalName()),
                ]);
            }
        }
        return response()->json(['message' => 'Produit modifié avec succès !'], 200);
    }

    public function userupdate(Request $request, Product $product)
    {
        $product->update([
            'category_id' => $request->category_id,
            'shop_id' => $request->shop_id,
            'name' => $request->name,
            'description' => $request->description,
            'state' => 'enabled',
            'price' => doubleval($request->price),
            'special_price' => doubleval($request->special_price)
        ]);
        
        if ($request->file('image_0') !== null || $request->file('image_0') !== 'undefined' || !empty($request->file('image_0'))) {
            foreach ($product->images as $image) { $image->delete(); }
            for ($i=0; $i < intval($request->i); $i++) { 
                Image::create([
                    'product_id' => $product->id,
                    'path' => $request->file('image_'. $i)->storeAs('', $request->file('image_'. $i)->getClientOriginalName()),
                ]);
            }
        }
        return response()->json(['message' => 'Produit modifié avec succès !'], 200);
    }

    public function destroy(Request $request, $product)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        $product->delete();
        return response()->json(['message' => 'Produit supprimé avec succès !'], 200);
    }

    public function option($option)
    {
        return response()->json(Product::where($option)->get(), 200);
    }

    public function state(Request $request, Product $product, string $state)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        $product->update([
            'state' => $state
        ]);
        return response()->json(['message' => 'State modifié avec succès !'], 200);
    }

    public function userstate(Request $request, Product $product, string $state)
    {
        // if (!Gate::allows('delete', Auth::user())) abort(403);
        $product->update([
            'state' => $state
        ]);
        return response()->json(['message' => 'State modifié avec succès !'], 200);
    }
}
