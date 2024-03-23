<?php

namespace App\Http\Controllers;

use App\Models\Rewiew;
use Illuminate\Http\Request;

class RewiewController extends Controller
{
    public function index()
    {
        return response()->json(Rewiew::all(), 200);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        Rewiew::create([
            'product_id' => $request->product_id ?? null, 
            'shop_id' => $request->shop_id ?? null, 
            'rating' => $request->rating ?? null, 
            'text' => $request->text ?? null, 
        ]);
        return response()->json(['message' => 'Rewiew ajouté avec succès !']);
    }

    public function show(Rewiew $rewiew)
    {
        //
    }

    public function edit(Rewiew $rewiew)
    {
        //
    }

    public function update(Request $request, Rewiew $rewiew)
    {
        //
    }

    public function destroy(Rewiew $rewiew)
    {
        //
    }
}
