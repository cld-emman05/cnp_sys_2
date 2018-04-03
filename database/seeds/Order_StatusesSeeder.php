<?php

use Illuminate\Database\Seeder;

class Order_StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('order_statuses')->insert([
        [
          'remarks' => 'File given does not match specifications',
          'order_id' => 2,
          'phase_id' => 2,
          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),        ],
        ]);

        DB::table('order_statuses')->insert([
        [
          'remarks' => 'Preparing materials for production',
          'order_id' => 4,
          'phase_id' => 3,
          'created_at' => Carbon\Carbon::now(),
          'updated_at' => Carbon\Carbon::now(),        ],
      ]);
    }
}
