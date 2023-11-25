<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_id' => 1,
                'email' => 'rocioadmin@gmail.com',
                'name' => 'Rocio Admin',
                'role_id' => 1,
                'avatar' => 'admin-pfp.jpg',
                'password' => Hash::make('1234'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'email' => 'rociouser@gmail.com',
                'name' => 'Rocio User',
                'role_id' => 2,
                'avatar' => 'user-pfp.jpg',
                'password' => Hash::make('1234'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
