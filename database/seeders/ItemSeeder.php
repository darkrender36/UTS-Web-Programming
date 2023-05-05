<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'item_type_id' => 1,
            'item_image' => 'images/espresso/Caffe_Mocha.jpg',
            'item_name' => 'Caffe Mocha',
            'item_price' => 60000,
        ]);

        DB::table('items')->insert([
            'id' => 2,
            'item_type_id' => 1,
            'item_image' => 'images/espresso/Caramel_Macchiato.jpg',
            'item_name' => 'Caramel Macchiato',
            'item_price' => 80000,
        ]);

        DB::table('items')->insert([
            'id' => 3,
            'item_type_id' => 2,
            'item_image' => 'images/brewed/Cold_Brew.jpg',
            'item_name' => 'Cold Brew',
            'item_price' => 10000,
        ]);

        DB::table('items')->insert([
            'id' => 4,
            'item_type_id' => 2,
            'item_image' => 'images/brewed/Misto.jpg',
            'item_name' => 'Misto',
            'item_price' => 50000,
        ]);

        DB::table('items')->insert([
            'id' => 5,
            'item_type_id' => 3,
            'item_image' => 'images/blended/Java_Chip_Frappuccino.jpg',
            'item_name' => 'Java Chip Frappuccino',
            'item_price' => 40000,
        ]);

        DB::table('items')->insert([
            'id' => 6,
            'item_type_id' => 3,
            'item_image' => 'images/blended/Mocha_Jelly_Frappuccino.jpg',
            'item_name' => 'Mocha Jelly Frappuccino',
            'item_price' => 20000,
        ]);

        DB::table('items')->insert([
            'id' => 7,
            'item_type_id' => 4,
            'item_image' => 'images/others/Green_Tea_Latte.jpg',
            'item_name' => 'Green Tea Latte',
            'item_price' => 30000,
        ]);

        DB::table('items')->insert([
            'id' => 8,
            'item_type_id' => 4,
            'item_image' => 'images/others/Signature_Chocolate.jpg',
            'item_name' => 'Signature Chocolate',
            'item_price' => 70000,
        ]);
    }
}
