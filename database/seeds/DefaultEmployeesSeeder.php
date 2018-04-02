<?php

use Illuminate\Database\Seeder;

class DefaultEmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employees')->insert([
        [
         'flag' => '1', // employee is still hired
         'user_id' => '1',
         'department_id' => '1',
        ],

        [
         'flag' => '1', // employee is still hired
         'user_id' => '3',
         'department_id' => '2',
        ],

        [
         'flag' => '1', // employee is still hired
         'user_id' => '4',
         'department_id' => '5',
        ],

        [
         'flag' => '1', // employee is still hired
         'user_id' => '5',
         'department_id' => '3',
        ],

        [
         'flag' => '1', // employee is still hired
         'user_id' => '6',
         'department_id' => '4',
        ],
     ]);
    }
}
