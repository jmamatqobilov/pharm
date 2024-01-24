<?php

namespace Database\Seeders;


use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'trimol', 
            'producttype_id' => 3,
            'price' => 1200
        ]);
        Product::create([
            'name' => 'asprin', 
            'producttype_id' => 3,
            'price' => 1200
        ]);
        Product::create([
            'name' => 'sitramon', 
            'producttype_id' => 3,
            'price' => 1200
        ]);
        Product::create([
            'name' => 'paeasetamol', 
            'producttype_id' => 3,
            'price' => 1200
        ]);
        Product::create([
            'name' => 'alhedaya', 
            'producttype_id' => 3,
            'price' => 1200
        ]);
    }
}
