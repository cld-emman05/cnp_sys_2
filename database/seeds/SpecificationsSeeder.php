<?php

use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
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
          'type' => '',
          'pages' => '',
          'size_id' => '',
          'cover_paper_id' => '',
          'cover_color_id' => '',
          'inside_paper_id' => '',
          'inside_color_id' => '',
          'lamination_id' => '',
          'binding_id' => '',
        ],

      ]);
    }
}
