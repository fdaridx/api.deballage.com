<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    public function run(): void
    {
        Shop::create([
            'user_id' => 2,
            'intitule' => 'Shop Men',
            'description' => '...',
            'state' => 'enabled',
            'profile' => '',
            'cover' => '',
            'info' => [],
        ]);
    }
}
