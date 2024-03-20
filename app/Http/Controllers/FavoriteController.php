<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Favorite::create([
            'product_id' => $request->product_id ?? null, 
            'user_id' => Auth::user() ? Auth::user()->id : null,
            'user_id_2' => $request->user_id_2 ?? null,
            'session_id' => $request->session_id ?? null,
        ]);
        return response()->json(['message' => 'Favorie ajouté avec succès !'], 200);
    }

    public function show(Favorite $favorite)
    {
        //
    }

    public function edit(Favorite $favorite)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Favorite $favorite)
    {
        //
    }
}
