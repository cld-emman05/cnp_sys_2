<?php

use Illuminate\Database\Seeder;

class RawMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //for Inside
      DB::table('raw_materials')->insert([
        [
         'reams' => '50',
         'order_id'=> '3',
         'supplier_id' => '1'
        ],

    ]);
    }
}
