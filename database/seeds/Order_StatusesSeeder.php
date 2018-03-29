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
          'order_id' => '1',
          'phase_id' => '2',
          'created_at' => '2018-03-22,  13:10:11',
          'updated_at' => '2018-03-22,  13:10:11'
        ],

        [
          'remarks' => 'Preparing materials for production',
          'order_id' => '2',
          'phase_id' => '3',
          'created_at' => '2018-04-24,  14:18:42',
          'updated_at' => '2018-04-24,  14:18:42'
        ],

      ]);
    }
}
