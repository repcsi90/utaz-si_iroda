<?php

namespace Database\Seeders;

use App\Models\airlines;
use App\Models\flights;
use App\Models\travels;
use App\Models\User;
use App\Models\users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        airlines::factory(10)->create();
        flights::factory(10)->create();
        //travels::factory(10)->create();
        

    }
}
