<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
              'username' => 'admin',
              'email' => 'admin@jd.com',
              'password' => bcrypt('123'),
              'role' => 'ADMIN'
            ],
            [
                'username' => 'user',
                'email' => 'user@jd.com',
                'password' => bcrypt('123'),
                'role' => 'USER'
            ],
            [
                'username' => 'userSuper',
                'email' => 'userSuper@jd.com',
                'password' => bcrypt('123'),
                'role' => 'USER'
            ]
        ]);
    }
}
