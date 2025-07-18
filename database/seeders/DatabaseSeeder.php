<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Agent;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Database\Seeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(count: 10)->create();
        Agent::factory(20)->create();

    }
}
