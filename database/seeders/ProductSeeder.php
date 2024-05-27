<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
      Product::create([
        'name'=> 'Example',
        'short_description'=> 'Lorem ipsom',
        'description' => 'lorem ipson dolar sum',
        'price' => '40'

      ]);
      Product::create([
        'name'=> 'Example 2',
        'short_description'=> 'Lorem ipsom',
        'description' => 'lorem ipson dolar sum',
        'price' => '25'

      ]);
      Product::create([
        'name'=> 'Example 3',
        'short_description'=> 'Lorem ipsom',
        'description' => 'lorem ipson dolar sum',
        'price' => '60'

      ]);
    }
}
