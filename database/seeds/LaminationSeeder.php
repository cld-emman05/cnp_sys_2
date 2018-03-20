<?php

use Illuminate\Database\Seeder;

class LaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('lamination__types')->insert([
        ['name' => 'Matte (1-sided)',
         'description'=> 'One-sided Matte Lamination'
        ],

        ['name' => 'Matte (2-sided)',
         'description'=> 'Double-sided Matte Lamination'
        ],

        ['name' => 'Plastic Lamination',
         'description'=> 'Traditional Plastic Lamination'
        ],

        ['name' => 'Ultraviolet Coating',
         'description'=> 'UV Coating'
        ],
    ]);
    }
}
