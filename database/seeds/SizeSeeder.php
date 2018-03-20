<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('size__types')->insert([
        ['name' => 'Letter',
         'description'=> '8.5 x 11'
        ],
        ['name' => 'Legal',
         'description'=> '8.5 x 13'
        ],
        ['name' => 'Broadsheet',
         'description'=> '24 x 18'
        ],
        ['name' => 'C4',
         'description'=> '9 x 12'
        ],
    ]);
    }
}
