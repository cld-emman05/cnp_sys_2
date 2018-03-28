<?php

use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('industries')->insert([
        ['type' => 'Academe,
         'description'=> 'schools and universities',
        ],
        ['type' => 'NGO',
         'description'=> 'non-government organizations',
        ],
        ['type' => 'Spiritual Services',
         'description'=> 'churches',
        ],
        ['type' => 'Government',
         'description'=> 'political affairs',
        ],
        ['type' => 'Private Sectors',
         'description'=> 'businesses and the like',
        ],
        ['type' => 'Food and Beverages',
         'description'=> 'restuarants, fastfoods, and so on',
        ],
    ]);
    }
}
