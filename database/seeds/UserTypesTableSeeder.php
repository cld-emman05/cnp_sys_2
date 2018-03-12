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
          ['type' => 'Administrator'],
          ['type' => 'Purchasing'],
          ['type' => 'Sales'],
          ['type' => 'Customer'],
          ['type' => 'Production'],
          ['type' => 'Finance']
        ]);
    }
}
