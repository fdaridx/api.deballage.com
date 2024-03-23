<?php

namespace Database\Seeders;

use App\Models\Atribute;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use TijsVerkoyen\CssToInlineStyles\Css\Property\Property;

class AtributeSeeder extends Seeder
{

    public function run(): void
    {
        Atribute::create([
            'name' => 'taille',
        ]);
    }
}
