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
        ['name' => 'Rejected',
          'description' => '',
        ['name' => 'For Revision',
          'description' => 'agents who are responsible for orders
          , and customer management'],
        ['name' => 'In Process',
          'description' => 'internal officers that are responsible
            for suppliers and purchasing of raw materials.'],
        ['name' => 'Layoutting/Typesetting',
          'description' => 'internal officers that are responsible for
          the cashflow, and debts incurred by the company.'],
        ['name' => 'Imagesetting',
          'description' => 'internal officers who are rensponsible for
           the layout and production of the orders.'],
           ['name' => 'Platemaking',
             'description' => 'internal officers who are rensponsible for
              the layout and production of the orders.'],
              ['name' => 'Offset/Press',
                'description' => 'internal officers who are rensponsible for
                 the layout and production of the orders.'],
                 ['name' => 'Stripping',
                   'description' => 'internal officers who are rensponsible for
                    the layout and production of the orders.'],
                    ['name' => 'Bindery',
                      'description' => 'internal officers who are rensponsible for
                       the layout and production of the orders.'],
                       ['name' => 'Ready For Delivery',
                         'description' => 'internal officers who are rensponsible for
                          the layout and production of the orders.'],
                          ['name' => 'Delivered',
                            'description' => 'internal officers who are rensponsible for
                             the layout and production of the orders.'],
      ]);
    }
}
