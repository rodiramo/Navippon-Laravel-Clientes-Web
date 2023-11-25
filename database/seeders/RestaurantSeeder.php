<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            [
                'restaurant_id' => 1,
                'title' => 'Sushi Paradise',
                'description' => 'Experience the finest sushi in town at Sushi Paradise. Our chefs use only the freshest ingredients to create authentic Japanese flavors.',
                'cover' => 'restaurant-sushi.jpg',
                'budget_id' => 1,
                'city_id' => 3,
                'location' => '123 Main St, Cityville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 2,
                'title' => 'Bistro Fusion',
                'description' => 'Bistro Fusion offers a delightful fusion of flavors from around the world. Enjoy a unique culinary experience in a cozy atmosphere.',
                'cover' => 'restaurant-bistro.jpg',
                'budget_id' => 1,
                'city_id' => 3,
                'location' => '456 Oak St, Townsville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 3,
                'title' => 'Spice Garden',
                'description' => 'Indulge in the rich and diverse flavors of Spice Garden. Our chefs masterfully blend spices to create mouthwatering dishes that will tantalize your taste buds.',
                'cover' => 'restaurant-spice.jpg',
                'budget_id' => 1,
                'city_id' => 3,
                'location' => '789 Pine St, Villagetown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more restaurants as needed
        ]);

        /* restaurant has categories table "seeder" */
        DB::table('restaurant_has_categories')->insert([
            [
                'restaurant_id' => 1,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 1,
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 2,
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 2,
                'category_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 3,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'restaurant_id' => 3,
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more relationships between restaurants and categories
        ]);
    }
}
