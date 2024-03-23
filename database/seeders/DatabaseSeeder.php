<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ShopSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            CartLineSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            QwaterSeeder::class,
            AtributeSeeder::class,
            PropertySeeder::class
        ]);
    }
}
