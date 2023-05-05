<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'id' => 1,
            'user_id' => 1,
            'item_id' => 1,
            'transaction_date' => Carbon::createFromFormat('d F Y', '19 March 2023')
        ]);

        DB::table('transactions')->insert([
            'id' => 2,
            'user_id' => 1,
            'item_id' => 2,
            'transaction_date' => Carbon::createFromFormat('d F Y', '20 March 2023')
        ]);

        DB::table('transactions')->insert([
            'id' => 3,
            'user_id' => 1,
            'item_id' => 3,
            'transaction_date' => Carbon::createFromFormat('d F Y', '21 March 2023')
        ]);

        DB::table('transactions')->insert([
            'id' => 4,
            'user_id' => 2,
            'item_id' => 4,
            'transaction_date' => Carbon::createFromFormat('d F Y', '18 March 2023')
        ]);

        DB::table('transactions')->insert([
            'id' => 5,
            'user_id' => 2,
            'item_id' => 5,
            'transaction_date' => Carbon::createFromFormat('d F Y', '19 March 2023')
        ]);

        DB::table('transactions')->insert([
            'id' => 6,
            'user_id' => 2,
            'item_id' => 7,
            'transaction_date' => Carbon::createFromFormat('d F Y', '21 March 2023')
        ]);
    }
}
