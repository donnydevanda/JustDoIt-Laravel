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
                'shoes_id' => '1',
                'quantity' => '2',
                'price' => '7760000'
            ],
            [
                'users_id' => '2',
                'shoes_id' => '3',
                'quantity' => '1',
                'price' => '3490000'
            ]
        ]);
    }
}
