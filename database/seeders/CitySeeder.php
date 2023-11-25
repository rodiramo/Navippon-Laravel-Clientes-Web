<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'city_id' => 1,
                'name' => 'Tokyo',
                'prefecture' => 'Tokyo',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 2,
                'name' => 'Yokohama',
                'prefecture' => 'Kanagawa',
                'picture' => 'yokohama.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 3,
                'name' => 'Osaka',
                'prefecture' => 'Osaka',
                'picture' => 'osaka.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 4,
                'name' => 'Nagoya',
                'prefecture' => 'Aichi',
                'picture' => 'nagoya.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 5,
                'name' => 'Sapporo',
                'prefecture' => 'Hokkaido',
                'picture' => 'hokkaido.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 6,
                'name' => 'Fukuoka',
                'prefecture' => 'Fukuoka',
                'picture' => 'fukuoka.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 7,
                'name' => 'Kobe',
                'prefecture' => 'Hyogo',
                'picture' => 'kobe.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 8,
                'name' => 'Kyoto',
                'prefecture' => 'Kyoto',
                'picture' => 'kyoto.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 9,
                'name' => 'Saitama',
                'prefecture' => 'Saitama',
                'picture' => 'saitama.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 10,
                'name' => 'Chiba',
                'prefecture' => 'Chiba',
                'picture' => 'chiba.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 11,
                'name' => 'Sendai',
                'prefecture' => 'Miyagi',
                'picture' => 'sendai.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 12,
                'name' => 'Kawasaki',
                'prefecture' => 'Kanagawa',
                'picture' => 'kawasaki.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 13,
                'name' => 'Saitama',
                'prefecture' => 'Saitama',
                'picture' => 'saitama.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 14,
                'name' => 'Kumamoto',
                'prefecture' => 'Kumamoto',
                'picture' => 'kumamoto.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 15,
                'name' => 'Nara',
                'prefecture' => 'Nara',
                'picture' => 'nara.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
