<?php

namespace Database\Seeders;

use App\Models\AtributeProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtributeProductSeeder extends Seeder
{

    public function run(): void
    {
        AtributeProduct::create([
            'atribute_id' => 1,
            'product_id' => 1,
        ]);
    }
}
