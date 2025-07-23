<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'categorie_id' => 1,
            'name' => 'Hairclip Premium',
            'description' => 'Hairclip berkualitas tinggi.',
            'stock' => 100,
            'price' => 50000,
        ]);
        
    }
}
