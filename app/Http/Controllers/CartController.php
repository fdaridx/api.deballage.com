<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CartController extends Controller
{
    public function index()
    {
        if (!Gate::allows('viewAny', Auth::user())) abort(403);
        return response()->json(Cart::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // On peut enregistrer un panier grace à l'id de la session de l'utilisateur afin de l'identifier à son prochain passage
        $cart = Cart::create([
            'session_id' => $request->session_id
        ]);
        return response($cart, 200);
    }

    public function show(Request $request)
    {
        $cart = Cart::where('session_id', $request->session_id)->first();
        if (isset($cart)) {
            return response($cart, 200);
        } else {
            return response()->json(['message' => 'Panier inexistant !'], 500);
        }
        
    }

    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        //
    }
}
