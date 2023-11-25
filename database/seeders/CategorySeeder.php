<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Nature',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Anime',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Relaxing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Fun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 6,
                'name' => 'Cultural',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 7,
                'name' => 'Historical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 8,
                'name' => 'Family',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 9,
                'name' => 'Kids',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 10,
                'name' => 'Architecture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 11,
                'name' => 'Concerts',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 12,
                'name' => 'Events',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 13,
                'name' => 'Garden',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 14,
                'name' => 'Onsen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 15,
                'name' => 'Beach',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 16,
                'name' => 'Shopping',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 17,
                'name' => 'Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 18,
                'name' => 'Water Activities',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 19,
                'name' => 'Sport',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 20,
                'name' => 'Events',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 21,
                'name' => 'Museums',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 22,
                'name' => 'Gardens',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
