<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AtributeProduct;
use App\Http\Requests\StoreAtributeProductRequest;
use App\Http\Requests\UpdateAtributeProductRequest;

class AtributeProductController extends Controller
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
        $messages = [];
        if ($request->atribute_id == null || empty($request->atribute_id)) {
            $messages[] = "Veuillez renseigner un attribut";
        }

        if ($request->product_id == null || empty($request->atribute_id)) {
            $messages[] = "Veuillez renseigner un produit";
        }

        if (count($messages) == 0) {
            $atributeProduct = AtributeProduct::firstOrCreate([
                'atribute_id' => $request->atribute_id,
                'product_id' => $request->product_id,
            ], [
                'atribute_id' => $request->atribute_id,
                'product_id' => $request->product_id,
            ]);

            if ($atributeProduct->wasRecentlyCreated) {
                return response()->json(['message' => 'Attribut de produit crée avec succès !'], 500);
            } else {
                return response()->json(['message' => 'Cet Attribut pour ce produit existe déjà !'], 500);
            }
            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(AtributeProduct $atributeProduct)
    {
        //
    }

    public function edit(AtributeProduct $atributeProduct)
    {
        //
    }

    public function update(Request $request, AtributeProduct $atributeProduct)
    {
        //
    }

    public function destroy(AtributeProduct $atributeProduct)
    {
        //
    }
}
