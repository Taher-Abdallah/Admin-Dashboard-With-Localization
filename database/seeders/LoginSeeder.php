<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::UpdateorCreate([
            'name' => 'Taher',
            'email' => 'taher@gmail.com',
            'password' => bcrypt('2244167199'),
        ]);
    }
}
