<?php

use Illuminate\Database\Seeder;

class JobTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('job_types')->insert([
        [
            'name' => '--', 
            'description' => 'null'
        ],
          ['name' => 'Brochure', 'description' => 'it is a brochure'],
          ['name' => 'Calendar', 'description' => 'it is a calendar'],
          ['name' => 'Poster', 'description' => 'it is a poster'],
          ['name' => 'Book', 'description' => 'it is a book'],
          ['name' => 'Magazine', 'description' => 'it is a magazine'],
          ['name' => 'Yearbook', 'description' => 'it is a yearbook'],
      ]);
    }
}
