<?php

use Illuminate\Database\Seeder;

class Cover_PapersSeeder extends Seeder
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

    ]);
    }
}
