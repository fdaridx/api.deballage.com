<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{

    public function run(): void
    {
        City::create(['countrie_id' => 1, 'name' => 'douala']);
    }
}
