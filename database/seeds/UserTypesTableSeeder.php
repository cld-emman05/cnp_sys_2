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
          ['type' => 'customer'],
          ['type' => 'sales'],
          ['type' => 'administrator'],
          ['type' => 'pre-press'],
          ['type' => 'purchasing'],
          ['type' => 'finance']
        ]);
    }
}
