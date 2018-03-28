<?php

use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //TODO
      DB::table('quotations')->insert([
        [
          'unit_price' => '',
          'total_amount' => '',
          'order_id' => '1'
        ],

        [
          'unit_price' => '',
          'total_amount' => '',
          'order_id' => '2'
        ],

        [
          'unit_price' => '',
          'total_amount' => '',
          'order_id' => '3'
        ],

      ]);
    }
}
