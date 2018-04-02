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
      DB::table('phases')->insert([
        ['name' => 'For Quotation',
          'description' => 'Order has been made, and shall undergo quotation.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Rejected',
          'description' => 'Job order Rejected'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'For Revision',
          'description' => 'agents who are responsible for orders and customer management'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'In Process',
          'description' => 'internal officers that are responsible for suppliers and purchasing of raw materials.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Layoutting/Typesetting',
          'description' => 'internal officers that are responsible for the cashflow, and debts incurred by the company.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Imagesetting',
          'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Platemaking',
             'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Offset/Press',
         'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Stripping',
         'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Bindery',
         'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Ready For Delivery',
         'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);

      DB::table('phases')->insert([
        ['name' => 'Delivered',
         'description' => 'internal officers who are rensponsible for the layout and production of the orders.'],
      ]);
    }
}
