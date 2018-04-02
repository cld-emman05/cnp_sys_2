<?php

use Illuminate\Database\Seeder;

class SpecificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //TODO
      DB::table('specifications')->insert([
        [
          'type' => 'Yearbook',
          'pages' => '80',
          'size_id' => '4',
          'cover_paper_id' => '1',
          'cover_color_id' => '2',
          'inside_paper_id' => '6',
          'inside_color_id' => '2',
          'lamination_id' => '2',
          'binding_id' => '1',
        ],

      ]);
    }
}
