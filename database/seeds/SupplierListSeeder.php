<?php

use Illuminate\Database\Seeder;

class SupplierListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suppliers')->insert([
        ['name' => 'Dhunwell', // employee is still hired
         'credit_balance' => ,
         'credit_limit' => 150000,
         'contact' => '999-2862',
         'term_id' => 1,
         'material_id' => null ,
         'payment_id' => null,
         'created_at' => \Carbon\Carbon::now(),
         'updated_at' => \Carbon\Carbon::now(),
       ],

     ]);
    }
}
