<?php

use Illuminate\Database\Seeder;

class DefaultAgentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('agents')->insert([
        [
          'employee_id' => '2',
          'industry_id' => '1',
        ]
     ]);
    }
}
