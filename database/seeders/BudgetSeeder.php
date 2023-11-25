<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('budget')->insert([
            [
                'budget_id' => 1,
                'name' => 'Low',
                'value' => '$',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'budget_id' => 2,
                'name' => 'Moderate',
                'value' => '$$',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'budget_id' => 3,
                'name' => 'High',
                'value' => '$$$',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
