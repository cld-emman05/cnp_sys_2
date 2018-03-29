<?php

use Illuminate\Database\Seeder;

class RevisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('revisions')->insert([
        [
         'remarks' => 'Modified cover design before production',
         'created_at' => '2018-03-11,  14:18:42',
         'updated_at' => '2018-03-11,  14:18:42'
        ],
    ]);
    }
}
