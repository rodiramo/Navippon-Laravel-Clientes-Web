<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'name' => 'Temples',
                'icon' => 'temples.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Nature',
                'icon' => 'nature.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Anime',
                'icon' => 'anime.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Relaxing',
                'icon' => 'relaxing.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Fun',
                'icon' => 'fun.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 6,
                'name' => 'Cultural',
                'icon' => 'cultural.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 7,
                'name' => 'Historical',
                'icon' => 'historical.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 8,
                'name' => 'Family',
                'icon' => 'family.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 9,
                'name' => 'Kids',
                'icon' => 'kids.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 10,
                'name' => 'Architecture',
                'icon' => 'architecture.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 11,
                'name' => 'Concerts',
                'icon' => 'concerts.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 12,
                'name' => 'Events',
                'icon' => 'events.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 13,
                'name' => 'Garden',
                'icon' => 'garden.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 14,
                'name' => 'Onsen',
                'icon' => 'onsen.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 15,
                'name' => 'Beach',
                'icon' => 'beach.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 16,
                'name' => 'Shopping',
                'icon' => 'shopping.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 17,
                'name' => 'Technology',
                'icon' => 'technology.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 18,
                'name' => 'Water Activities',
                'icon' => 'water_activities.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 19,
                'name' => 'Sport',
                'icon' => 'sport.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 20,
                'name' => 'Museums',
                'icon' => 'museums.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 21,
                'name' => 'Night Life',
                'icon' => 'night_life.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 22,
                'name' => 'Party',
                'icon' => 'party.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 23,
                'name' => 'Restaurants',
                'icon' => 'restaurants.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
