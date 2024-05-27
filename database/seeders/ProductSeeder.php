<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
      Product::factory()->count(150)->create();
    }
}
