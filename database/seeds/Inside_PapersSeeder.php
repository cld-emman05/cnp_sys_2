<?php

use Illuminate\Database\Seeder;

class Inside_PapersSeeder extends Seeder
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
         'paper_type_id' => '2',
        ],

    ]);
    }
}
