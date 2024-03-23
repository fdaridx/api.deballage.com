<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{

    public function run(): void
    {
        Property::create([
            'atribute_id' => 1,
            'value' => '35',
        ]);
    }
}
