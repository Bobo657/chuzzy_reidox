<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UtilitySeeder::class);

        \App\Models\User::factory(10)
        ->has(\App\Models\Investment::factory()->count(1))
         ->has(\App\Models\Post::factory()->count(1))
        ->has(\App\Models\Withdrawal::factory()->count(5))
        ->create();

        

    }
}
