<?php

use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //for Inside
      DB::table('payments')->insert([
        [
         'comment' => 'Downpayment worth 15000 for Coated Paper Two Side 120 GSM',
         'created_at'=> '2018-3-29',
         'updated_at' => '2018-3-29'
        ],

    ]);
    }
}
