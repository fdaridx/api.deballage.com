<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'shop_id' => 1,
            'name' => 'ordinateur',
            'description' => '...',
            'state' => 'init',
            'price' => 300000,
            'special_price' => 299999,
            'info'  => [],
        ]);
    }
}
