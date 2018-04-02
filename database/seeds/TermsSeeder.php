<?php

use Illuminate\Database\Seeder;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //for Inside
      DB::table('terms')->insert([
        [
         'days' => '30'
        ],

        [
         'days' => '60'
        ],

        [
         'days' => '90'
        ],

    ]);
    }
}
