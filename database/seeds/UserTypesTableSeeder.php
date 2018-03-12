<?php

use Illuminate\Database\Seeder;


class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
          ['type' => 'Customer'],
          ['type' => 'Sales'],
          ['type' => 'Administrator'],
          ['type' => 'Production'],
          ['type' => 'Purchasing'],
          ['type' => 'finance']
        ]);
    }
}
