<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itemtypes')->insert([
            'id' => 1,
            'item_type_name' => 'Espresso'
        ]);

        DB::table('itemtypes')->insert([
            'id' => 2,
            'item_type_name' => 'Brewed Coffee'
        ]);

        DB::table('itemtypes')->insert([
            'id' => 3,
            'item_type_name' => 'Blended Coffee'
        ]);

        DB::table('itemtypes')->insert([
            'id' => 4,
            'item_type_name' => 'Others'
        ]);
    }
}
