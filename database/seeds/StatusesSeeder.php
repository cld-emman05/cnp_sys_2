<?php

use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *.
     * @return void
     */
    public function run()
    {
      DB::table('statuses')->insert([
        ['status' => 'For Approval'],

        ['status' => 'Approved'],

        ['status' => 'Change Deal'],

        ['status' => 'Rejected'],
    ]);
    }
}
