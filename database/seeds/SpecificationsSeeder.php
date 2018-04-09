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
          'cover_paper_id' => '7',
          'cover_color_id' => '2',
          'inside_paper_id' => '6',
          'inside_color_id' => '2',
          'lamination_id' => '2',
          'binding_id' => '8',
        ],

        DB::table('specifications')->insert([
          [
            'type' => 'Brochure',
            'pages' => '1',
            'size_id' => '1',
            'cover_paper_id' => '5',
            'cover_color_id' => '2',
            'inside_paper_id' => 'null',
            'inside_color_id' => 'null',
            'lamination_id' => '2',
            'binding_id' => 'null',
          ],

          DB::table('specifications')->insert([
            [
              'type' => 'Magazine',
              'pages' => '32',
              'size_id' => '4',
              'cover_paper_id' => '9',
              'cover_color_id' => '2',
              'inside_paper_id' => '6',
              'inside_color_id' => '2',
              'lamination_id' => '2',
              'binding_id' => '3',
            ],

            DB::table('specifications')->insert([
              [
                'type' => 'Calendar',
                'pages' => '7',
                'size_id' => '3',
                'cover_paper_id' => '8',
                'cover_color_id' => '2',
                'inside_paper_id' => '8',
                'inside_color_id' => '2',
                'lamination_id' => '3',
                'binding_id' => '2',
              ],

              DB::table('specifications')->insert([
                [
                  'type' => 'Poster',
                  'pages' => '1',
                  'size_id' => '3',
                  'cover_paper_id' => '10',
                  'cover_color_id' => '2',
                  'inside_paper_id' => '6',
                  'inside_color_id' => '2',
                  'lamination_id' => '4',
                  'binding_id' => 'null',
                ],

                DB::table('specifications')->insert([
                  [
                    'type' => 'Book',
                    'pages' => '100',
                    'size_id' => '1',
                    'cover_paper_id' => '2',
                    'cover_color_id' => '2',
                    'inside_paper_id' => '2',
                    'inside_color_id' => '1',
                    'lamination_id' => '5',
                    'binding_id' => '1',
                  ],

      ]);
    }
}
