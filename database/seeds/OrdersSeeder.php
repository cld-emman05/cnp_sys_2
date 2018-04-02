<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
          [
            'title' => 'Lasalle Graduation book 2018',
            'quantity' => '50',
            'due_date' => '2018-05-29',
            'comments' => 'Yearbook for upcoming graduates of De Lasalle University for the year 2018',
            'delivery_date' => '2018-05-25',
            'customer_id' => '1',
            'specification_id' => '1',
            'file_id' => '1',]
        ]);

          DB::table('orders')->insert([
            [
            'title' => 'Lasalle Choral Yearly',
            'quantity' => '100',
            'due_date' => '2018-06-20',
            'comments' => 'Lasalle Choral Yearly Photoshoot',
            'delivery_date' => '2018-06-18',
            'customer_id' => '1',
            'specification_id' => '2',
            'file_id' => '2',]
          ]);

          DB::table('orders')->insert([
          [
            'title' => 'DLSU Revised Handbook 2018',,
            'quantity' => '5000',,
            'due_date' => '2018-09-16',
            'comments' => 'Revised Handbook for DLSU students',
            'delivery_date' => '2018-09-10',
            'customer_id' => '1',
            'specification_id' => '3',
            'file_id' => '3'
          ],
        ]);
    }
}
