<?php

namespace Database\Seeders;

use App\Models\Qwater;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QwaterSeeder extends Seeder
{

    public function run(): void
    {
        Qwater::create(['citie_id' => 1, 'name' => 'bonanjo']);
    }
}
