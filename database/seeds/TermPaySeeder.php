<?php

use Illuminate\Database\Seeder;

class TermPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('terms')->insert([
        ['days' => '30'],
        ['days' => '60'],
        ['days' => '90'],
        ['days' => '120'],
    ]);
    }
}
