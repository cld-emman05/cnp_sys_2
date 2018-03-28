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
      DB::table('quotation_statuses')->insert([
        [
          'remarks' => '',
          'quotation_id' => '',
          'status_id' => '',
          'created_at' => '',
          'updated_at' => ''
        ],

      ]);
    }
}
