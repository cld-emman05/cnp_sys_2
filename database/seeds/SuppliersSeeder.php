<?php

use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //for Inside
      DB::table('suppliers')->insert([
        [
         'name' => 'Paper&Co',
         'credit_balance'=> '32500',
         'credit_limit' => '2000000',
         'contact' => '09455521631',
         'term_id' => '1',
         'material_id' => '7',
         'payment_id' => '1',
         'created_at' => '2018-3-29',
         'updated_at' => '2018-3-29'
        ],

    ]);
    }
}
