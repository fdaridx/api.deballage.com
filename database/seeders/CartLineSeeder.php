<?php

namespace Database\Seeders;

use App\Models\CartLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartLineSeeder extends Seeder
{
    public function run(): void
    {
        CartLine::create([
            'product_id' => 1,
            'cart_id' => 1,
            'quantity' => 23,
            'attributesValues' => ['couleur' => 'noir']
        ]);
    }
}
