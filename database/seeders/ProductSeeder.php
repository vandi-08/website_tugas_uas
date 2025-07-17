<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Sepatu Nike Hitam',
                'category' => 'Sepatu',
                'price' => 550000,
                'stock' => 10,
                'description' => 'Sepatu lari ringan dan stylish dari Nike.',
                'image' => 'sepatu-nike.jpg',
            ],
            [
                'name' => 'Kemeja Crocodile',
                'category' => 'Pakaian',
                'price' => 210000,
                'stock' => 20,
                'description' => 'Kemeja lengan pendek katun relax fit.',
                'image' => 'kemeja.jpg',
            ],
            [
                'name' => 'Jaket Aliexpress',
                'category' => 'Jaket',
                'price' => 330000,
                'stock' => 15,
                'description' => 'Jaket tebal untuk segala cuaca.',
                'image' => 'jaket.jpg',
            ],
        ]);
    }
}
