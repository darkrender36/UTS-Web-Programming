<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Vico Lomar',
            'loyalty_level' => 'Gold Level',
            'loyalty_point' => 20,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Fei Fei Li',
            'loyalty_level' => 'Green Level',
            'loyalty_point' => 50,
        ]);
    }
}
