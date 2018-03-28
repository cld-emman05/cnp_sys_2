<?php

use Illuminate\Database\Seeder;


class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
          ['name' => 'Administrator',
            'description' => 'the company owner responsible for
            quotations, and employee management'],

          ['name' => 'Sales',
            'description' => 'agents who are responsible for orders
            , and customer management'],

          ['name' => 'Purchasing',
            'description' => 'internal officers that are responsible
              for suppliers and purchasing of raw materials.'],

          ['name' => 'Finance',
            'description' => 'internal officers that are responsible for
            the cashflow, and debts incurred by the company.'],

          ['name' => 'Production',
            'description' => 'internal officers who are rensponsible for
             the layout and production of the orders.'],
        ]);
    }
}
