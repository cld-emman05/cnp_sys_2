<?php

use Illuminate\Database\Seeder;

class DefaultCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('customers')->insert([
        [
          'company' => 'De La Salle University',
          'user_id' => '2',
          'industry_id' => '1',
          'agent_id' => '1',
        ],
     ]);
    }
}
