<?php

namespace Database\Seeders;

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

        $data = [
            ["objek" => "lampu teras rumah","status" => false,"pin" => 5],
            ["objek" => "lampu dapur","status" => false,"pin" => 4],
            ["objek" => "lampu ruang tamu","status" => false,"pin" => 0],
            ["objek" => "tv","status" => false,"pin" => 2],
            ["objek" => "kipas angin","status" => false,"pin" => 14],
            ["objek" => "wifi","status" => false,"pin" => 12],
        ];
        foreach($data as $d){
            SmartHome::create($d);
        }
    }
}
