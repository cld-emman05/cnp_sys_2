<?php

use Illuminate\Database\Seeder;

class PaperColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('paper_color')->insert([
        ['name' => 'Black and White'
         'description'=> '0/0'
        ],

        ['name' => 'Full Color'
         'description'=> '4/0'
        ],
    ]);
    }
}
