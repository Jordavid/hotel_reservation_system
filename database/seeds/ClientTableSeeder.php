<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'title'=> 'Mr',
            'name'=> 'John',
            'last_name'=> 'Doe',
            'address'=> 'Boulaq',
            'zip_code'=> '152',
            'city'=> 'Cairo',
            'state'=> 'Egypt',
            'email'=> 'john@john.com'
        ]);

        DB::table('clients')->insert([
            'title'=> 'Mrs',
            'name'=> 'Joe',
            'last_name'=> 'Donn',
            'address'=> 'Zayed Cairo',
            'zip_code'=> '1552',
            'city'=> 'Dubai',
            'state'=> 'Caza',
            'email'=> 'joe@joe.com'
        ]);
    }
}
