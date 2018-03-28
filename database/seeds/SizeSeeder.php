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
        ],
    ]);
    }
}
