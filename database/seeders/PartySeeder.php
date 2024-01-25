<?php

namespace Database\Seeders;

use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Party::create([
            'product_id' => 1,
            'quantity'=>500,
            'warehouse_id'=>1,
            'status'=>10,
            'price' => 1200
        ]);

        Party::create([
            'product_id' => 2,
            'quantity'=>1000,
            'warehouse_id'=>1,
            'price' => 1200
        ]);
    }
}
