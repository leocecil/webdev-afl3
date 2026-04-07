<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Smartphone',
                'details' => 'Latest model with advanced features',
                'price' => 699.99,
                'stock' => 50,
                'category_id' => 1, // Assuming Electronics category has ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'T-Shirt',
                'details' => '100% cotton, available in various sizes',
                'price' => 19.99,
                'stock' => 200,
                'category_id' => 2, // Assuming Clothing category has ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novel Book',
                'details' => 'A gripping fiction novel by a bestselling author',
                'price' => 14.99,
                'stock' => 100,
                'category_id' => 3, // Assuming Books category has ID 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptop',
                'details' => 'High-performance laptop for work and gaming',
                'price' => 1299.99,
                'stock' => 30,
                'category_id' => 1, // Assuming Electronics category has ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeans',
                'details' => 'Stylish denim jeans for everyday wear',
                'price' => 49.99,
                'stock' => 150,
                'category_id' => 2, // Assuming Clothing category has ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Educational Book',
                'details' => 'Comprehensive guide for students and professionals',
                'price' => 29.99,
                'stock' => 80,
                'category_id' => 3, // Assuming Books category has ID 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'details' => 'Noise-cancelling over-ear headphones',
                'price' => 199.99,
                'stock' => 75,
                'category_id' => 1, // Assuming Electronics category has ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jacket',
                'details' => 'Warm and stylish jacket for winter',
                'price' => 89.99,
                'stock' => 120,
                'category_id' => 2, // Assuming Clothing category has ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science Book',
                'details' => 'In-depth exploration of scientific concepts',
                'price' => 39.99,
                'stock' => 60,
                'category_id' => 3, // Assuming Books category has ID 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablet',
                'details' => 'Portable tablet with high-resolution display',
                'price' => 499.99,
                'stock' => 40,
                'category_id' => 1, // Assuming Electronics category has ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
