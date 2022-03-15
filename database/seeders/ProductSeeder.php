<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Xiaomi Poco M4 Pro 5G',
                'price' => '18000',
                'category' => 'SmartPhone',
                'description' => 'Released 2021, November 11
                195g, 8.8mm thickness
                Android 11, MIUI 12.5
                64GB/128GB storage, microSDXC',
                'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m4-pro-5g.jpg'
            ],
            [
                'name' => 'Xiaomi Redmi Note 11S 5G',
                'price' => '20000',
                'category' => 'SmartPhone',
                'description' => 'DISPLAY	Type	IPS LCD, 90Hz, 450 nits (typ)
                Size	6.6 inches, 105.2 cm2',
                'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-redmi-note-11t-5g.jpg'
            ],
            [
                'name' => 'Samsung Galaxy S22 5G',
                'price' => '95000',
                'category' => 'SmartPhone',
                'description' => 'Released 2022, February 25
                167g / 168g (mmWave), 7.6mm thickness
                Android 12, One UI 4.1
                128GB/256GB storage, no card slot',
                'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s22-5g.jpg'
            ],
            [
                'name' => 'Apple iPhone 13 Pro',
                'price' => '120000',
                'category' => 'SmartPhone',
                'description' => 'Released 2021, September 24
                204g, 7.7mm thickness
                iOS 15, up to iOS 15.3
                128GB/256GB/1TB storage, no card slot',
                'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-13-pro.jpg'
            ],
            [
                'name' => 'Google Pixel 6',
                'price' => '60000',
                'category' => 'SmartPhone',
                'description' => 'Released 2021, October 28
                207g, 8.9mm thickness
                Android 12
                128GB/256GB storage, no card slot',
                'gallery' => 'https://fdn2.gsmarena.com/vv/bigpic/google-pixel-6.jpg'
            ]
        ]);
    }
}
