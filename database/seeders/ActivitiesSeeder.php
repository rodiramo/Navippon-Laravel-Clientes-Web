<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesSeeder extends Seeder
{
    public function run()
    {

        DB::table('activities')->insert([
            [
                'activity_id' => 1,
                'title' => 'Senso-ji Temple',
                'budget_id' => 1,
                'city_id' => 1,
                'direction' => '35.7141° N, 139.7967° E',
                'image' => 'senso-ji-temple.jpg',
                'image_description' => 'Senso-ji Temple in Tokyo',
                'description' => 'Senso-ji Temple is Tokyo\'s oldest temple, founded in 628. It is a vibrant and popular Buddhist temple located in Asakusa, offering a rich cultural experience for visitors.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 2,
                'title' => 'Ueno Park',
                'budget_id' => 2,
                'city_id' => 2,
                'direction' => '35.7138° N, 139.7748° E',
                'image' => 'ueno-park.jpg',
                'image_description' => 'Ueno Park in Tokyo',
                'description' => 'Ueno Park is a large public park in central Tokyo, known for its museums, cherry blossoms, and the Ueno Zoo. It\'s a perfect destination for nature lovers and those seeking a relaxing day outdoors.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 3,
                'title' => 'Fushimi Inari Taisha',
                'budget_id' => 2,
                'city_id' => 3,
                'direction' => '34.9671° N, 135.7727° E', // Kyoto
                'image' => 'fushimi-inari-taisha.jpg',
                'image_description' => 'Fushimi Inari Taisha in Kyoto',
                'description' => 'Fushimi Inari Taisha is a famous Shinto shrine in southern Kyoto. It is renowned for its thousands of vibrant torii gates that lead up to the sacred Mount Inari. A must-visit for cultural enthusiasts.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 4,
                'title' => 'Arashiyama Bamboo Grove',
                'budget_id' => 1,
                'city_id' => 3,
                'direction' => '35.0159° N, 135.6668° E', // Kyoto
                'image' => 'arashiyama-bamboo-grove.jpg',
                'image_description' => 'Arashiyama Bamboo Grove in Kyoto',
                'description' => 'The Arashiyama Bamboo Grove is a mesmerizing bamboo forest in the western outskirts of Kyoto. It offers a serene and enchanting atmosphere, making it a popular destination for nature lovers.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 5,
                'title' => 'Akihabara',
                'budget_id' => 2,
                'city_id' => 3,
                'direction' => '35.6995° N, 139.7710° E', // Tokyo
                'image' => 'akihabara.jpg',
                'image_description' => 'Akihabara in Tokyo',
                'description' => 'Akihabara, also known as Electric Town, is a vibrant district in central Tokyo known for its electronics shops, anime and manga stores, and themed cafes. It\'s a paradise for anime and gaming enthusiasts.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 6,
                'title' => 'Nara Park',
                'budget_id' => 1,
                'city_id' => 3,
                'direction' => '34.6851° N, 135.8399° E', // Nara
                'image' => 'nara-park.jpg',
                'image_description' => 'Nara Park in Nara',
                'description' => 'Nara Park is a large public park in Nara, Japan, home to hundreds of free-roaming deer considered sacred. Visitors can enjoy the picturesque scenery, visit temples, and interact with friendly deer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        /* activities has categories table "seeder" */
        DB::table('activities_has_categories')->insert([
            [
                'activity_id' => 1,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 1,
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 2,
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 2,
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 3,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 3,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 4,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 4,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 5,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 5,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 6,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 6,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 7,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 7,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 8,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'activity_id' => 8,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
