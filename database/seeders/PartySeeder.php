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
            'producttype_id' => 3,
            'quantity'=>500,
            'warehouse_id'=>1,
            'status'=>10,
            'price' => 1200
        ]);
    }
}
