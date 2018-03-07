<?php

use Illuminate\Database\Seeder;

class SizeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('size_types')->insert([
        [
          'name' => '--', 
          'description' => 'null'
      ],
      ['name' => 'Letter', 'description' => '8.5 x 11'],
      ['name' => 'Legal', 'description' => '8.5 x 13'],
      ['name' => '24 x 18', 'description' => '24 x 18'],
      ['name' => '9 x 12', 'description' => '9x12'],
    ]);
    }
}
