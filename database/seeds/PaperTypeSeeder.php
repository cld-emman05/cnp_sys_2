<?php

use Illuminate\Database\Seeder;

class PaperTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //for Inside
      DB::table('paper_types')->insert([
        ['name' => 'BP50',
         'description'=> 'for Inside Paper'
        ],

        ['name' => 'BP60',
         'description'=> 'for Inside Paper'
        ],

        ['name' => 'BP70',
         'description'=> 'for Inside Paper'
        ],

        ['name' => 'C2S70',
         'description'=> 'for Inside Paper'
        ],

        ['name' => 'C2S80',
         'description'=> 'for Inside Paper'
        ],

        ['name' => 'C2S100',
         'description'=> 'for Inside Paper'
        ],

        //for Covers
        ['name' => 'C2S120',
         'description'=> 'for Cover Paper'
        ],

        ['name' => 'C2S140',
         'description'=> 'for Cover Paper'
        ],

        ['name' => 'C2S160',
         'description'=> 'for Cover Paper'
        ],

        ['name' => 'C2S180',
         'description'=> 'for Cover Paper'
        ],

        ['name' => 'C2S140',
         'description'=> 'for Cover Paper'
        ],

        ['name' => 'C2S160',
         'description'=> 'for Cover Paper'
        ],

        ['name' => 'C2S180',
         'description'=> 'for Cover Paper'
        ],

		    ['name' => 'C2S220',
         'description'=> 'for Cover Paper'
        ],
    ]);
    }
}
