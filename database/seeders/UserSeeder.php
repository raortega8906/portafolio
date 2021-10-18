<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'ceiforestudios87@gmail.com',
            'password' => bcrypt('Password2021'),
            'is_admin' => 1
        ]);
    }
}
