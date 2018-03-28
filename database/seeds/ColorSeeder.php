<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colors')->insert([
        ['name' => 'Black and White',
          'description' => 'there is no color used',
        ['name' => 'Full Color',
          'description' => 'used variety of colors'],
        ]);
    }
}
