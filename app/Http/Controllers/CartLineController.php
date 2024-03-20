<?php

namespace App\Http\Controllers;

use App\Models\CartLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class CartLineController extends Controller
{
    public function index(Request $request)
    {
        if (!Gate::allows('viewAny', $request->user())) abort(403);
        return response()->json(CartLine::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        CartLine::create([
            'product_id' => $request->product_id, 
            'cart_id' => Auth::user()->cart->id,
            'quantity' => $request->quantity, 
            'attributesValues' => $request->attributesValues ?? [],
        ]);

        return response()->json(['message' => 'Produit ajouté au panier avec succès !'], 200);
    }

    public function show(Request $request)
    {
        return response()->json([CartLine::find($request->id)], 200);
    }

    public function edit(CartLine $cartLine)
    {
        //
    }

    public function update(Request $request, CartLine $cartLine)
    {
        //
    }

    public function destroy(CartLine $cartLine)
    {
        //
    }
}
