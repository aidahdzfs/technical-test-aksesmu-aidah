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
        $products = [
            [
        'name' => 'Kemeja Flanel Premium', 
        'description' => 'Kemeja lengan panjang bahan flanel katun tebal dan lembut, cocok untuk kasual.', 
        'price' => 185000.00, 
        'stock' => 25
    ],
    [
        'name' => 'Celana Jeans Slim Fit', 
        'description' => 'Celana denim stretch berwarna indigo dengan potongan slim fit yang nyaman bergerak.', 
        'price' => 299000.00, 
        'stock' => 40
    ],
    [
        'name' => 'Cardigan Knit Cable', 
        'description' => 'Cardigan bahan knit premium dengan bahan halus, tidak membuat gerah, dan modis.', 
        'price' => 350000.00, 
        'stock' => 15
    ],
    [
        'name' => 'Kaos Polos Cotton Combed 30s', 
        'description' => 'Kaos basic lengan pendek, bahan 100% serat kapas alami, menyerap keringat dengan baik.', 
        'price' => 65000.00, 
        'stock' => 100
    ],
    [
        'name' => 'Sepatu Sneakers Kasual', 
        'description' => 'Sepatu sneakers bahan knit berpori dengan sol karet empuk, ideal untuk aktivitas harian.', 
        'price' => 425000.00, 
        'stock' => 12
    ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
