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
            'name' => 'Laptop Gaming',
            'description' => 'Laptop high-end untuk gaming',
            'price' => 15000000,
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Smartphone flagship dengan fitur canggih',
            'price' => 12000000,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Keyboard Mechanical',
            'description' => 'Keyboard untuk gaming dan produktivitas',
            'price' => 500000,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Headphone Wireless',
            'description' => 'Headphone dengan kualitas suara tinggi',
            'price' => 2000000,
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Monitor 4K',
            'description' => 'Monitor 4K untuk gaming dan editing',
            'price' => 7000000,
            'stock' => 15,
        ]);
    }
}
