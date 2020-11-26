<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Transactions')->insert([
            [
                'users_id' => '2',
                'shoes_id' => '6',
                'quantity' => '1',
                'price' => '4050000',
                'checkout_time' => '2020-11-21 07:26:22'
            ],
            [
                'users_id' => '3',
                'shoes_id' => '8',
                'quantity' => '1',
                'price' => '4000000',
                'checkout_time' => '2020-11-22 08:28:22'
            ],
            [
                'users_id' => '3',
                'shoes_id' => '7',
                'quantity' => '1',
                'price' => '3722000',
                'checkout_time' => '2020-11-22 08:28:22'
            ],
        ]);
    }
}
