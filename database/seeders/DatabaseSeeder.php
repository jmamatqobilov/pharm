<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class); 
        $this->call(ProductTypeSeeder::class); 
        $this->call(ProductSeeder::class); 
        $this->call(ClientSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(PartySeeder::class); 
        $this->call(WarehouseSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(MeetingSeeder::class);
    }
}
