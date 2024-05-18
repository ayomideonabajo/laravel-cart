<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro,16 GPU, 16GB, 512GB SSD',
                'description' => 'For the first time, MacBook Pro features hardware-accelerated ray tracing. Combined with the new graphics architecture, it enables pro apps to deliver up to two and a half times faster rendering performance and allows games to provide more realistic shadows and reflections.',
                'brand' => 'Apple',
                'price' => 2455,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book pro',
                'details' => '13.3 inch, 8GB, DDR4 SDRAM, 256GB',
                'description' => 'The next big thing is here. Galaxy AI — built it to serve you, to unleash your creativity, up your productivity and unlock a world of new possibilities. In your hands, it should be more human, more reliable, more meaningful, more personal, more useful and more secure across devices. Life opens up with Galaxy AI.',
                'brand' => 'Smsung ',
                'price' => '1400',
                'shipping_cost' => '25',
                'image_path' => 'storage/product2.png'
            ],
        ];
        foreach($products as $key => $value){
           Product::create($value); }
    }
}
