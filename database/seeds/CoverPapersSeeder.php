<?php

use Illuminate\Database\Seeder;

class CoverPapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cover_papers')->insert([
        [
         'paper_type_id' => '7',
        ],

        [
         'paper_type_id' => '8',
        ],

        [
         'paper_type_id' => '9',
        ],

        [
         'paper_type_id' => '10',
        ],

        [
         'paper_type_id' => '11',
        ],
    ]);
    }
}
