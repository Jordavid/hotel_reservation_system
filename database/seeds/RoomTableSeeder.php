<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name' => '101',
            'floor' => 1,
            'description' => '101'
        ]);

        DB::table('rooms')->insert([
            'name' => '101',
            'floor' => 1,
            'description' => '101'
        ]);

        DB::table('rooms')->insert([
            'name' => '102',
            'floor' => 2,
            'description' => '102'
        ]);

        DB::table('rooms')->insert([
            'name' => '103',
            'floor' => 3,
            'description' => '103'
        ]);

        DB::table('rooms')->insert([
            'name' => '104',
            'floor' => 4,
            'description' => '104'
        ]);
    }
}
