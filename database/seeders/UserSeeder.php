<?php

namespace Database\Seeders;

use App\Models\user;
use Attributes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'wibuwangibawang@gmail.com',
            'password' => bcrypt(value: 'istrikuada9'),
        ]);
    }
}
