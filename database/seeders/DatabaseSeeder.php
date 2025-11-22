<?php

namespace Database\Seeders;

use App\Models\Dht22;
use App\Models\max_suhu;
use App\Models\SmartHome;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        max_suhu::create();
        Dht22::create();

    }
}
