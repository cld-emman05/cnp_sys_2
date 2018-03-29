<?php

use Illuminate\Database\Seeder;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('files')->insert([
        [
         'name' => 'Graduation Book 2018',
         'mime_type' => 'pdf',
         'version_id' => '1'
        ],
    ]);
    }
}
