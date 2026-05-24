<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'img' => 'https://via.placeholder.com/150',
            'brand' => 'Nike',
            'title' => 'Nike Air Max',
            'rating' => 4.5,
            'reviews' => 120,
            'sellPrice' => 120.00,
            'orders' => '500',
            'mrp' => '150.00',
            'discount' => 20,
            'category' => 'men'
        ]);

        \App\Models\Product::create([
            'img' => 'https://via.placeholder.com/150',
            'brand' => 'Adidas',
            'title' => 'Adidas Ultraboost',
            'rating' => 4.8,
            'reviews' => 200,
            'sellPrice' => 180.00,
            'orders' => '800',
            'mrp' => '200.00',
            'discount' => 10,
            'category' => 'women'
        ]);
    }
}
