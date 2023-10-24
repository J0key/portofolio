<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'email'=>'admin@gmail.com',
                'username'=>'admin',
                'password'=>\bcrypt("123"),
            ],
        ];
        User::create($user);
    }
}
