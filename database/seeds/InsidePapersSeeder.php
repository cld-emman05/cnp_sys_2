<?php

use Illuminate\Database\Seeder;

class InsidePapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('inside_papers')->insert([
        [
         'paper_type_id' => '1',
        ],

        [
         'paper_type_id' => '2',
        ],

        [
         'paper_type_id' => '3',
        ],

        [
         'paper_type_id' => '4',
        ],

        [
         'paper_type_id' => '5',
        ],

        [
         'paper_type_id' => '6',
        ],
    ]);
    }
}
