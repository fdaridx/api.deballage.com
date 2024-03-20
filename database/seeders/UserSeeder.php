<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        
        User::create([
            'first_name' => 'henry',
            'last_name' => 'dupont',
            'state' => 'enabled',
            'type' => 'user',
            'phone' => intval('+1 458 789 785 412'),
            'gender' => 'm',
            'email' => 'henry@gmail.com',
            'password' => 'henry',
            'info' => ['age' => 25]
        ]);

        User::create([
            'first_name' => 'karl',
            'last_name' => 'montreux',
            'state' => 'enabled',
            'type' => 'seller',
            'phone' => intval('+1 458 789 785 412'),
            'gender' => 'm',
            'email' => 'karl@gmail.com',
            'password' => 'karl',
            'info' => ['age' => 25]
        ]);

        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'state' => 'enabled',
            'type' => 'admin',
            'phone' => intval('+1 458 789 785 412'),
            'gender' => 'm',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'info' => ['age' => 25]
        ]);
    }
}
