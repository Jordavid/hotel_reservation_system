<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@localhost.com',
                'password' => bcrypt('123456')
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'jordavid',
                'email' => 'jordavid@localhost.com',
                'password' => bcrypt('David1fci@@')
            ]
        );
    }
}
