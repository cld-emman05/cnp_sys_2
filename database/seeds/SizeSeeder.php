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
<<<<<<< HEAD
      DB::table('statuses')->insert([
        ['name' => 'Letter',
         'dimension'=> '8.5 x 11'
        ],
        ['name' => 'Legal',
         'dimension'=> '8.5 x 13'
        ],
        ['name' => 'Broadsheet',
         'dimension'=> '24 x 18'
        ],
        ['name' => 'C4',
         'dimension'=> '9 x 12'
=======
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
>>>>>>> 4f7ffa6fd02ba4522b75a58d53419c96326ccd8a
        ],
    ]);
    }
}
