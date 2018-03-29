<?php

use Illuminate\Database\Seeder;

class Binding_TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binding__types')->insert([
          ['name' => 'Perfect',
           'description'=> 'Song of Ed Sheeran'
          ],
          ['name' => 'Wire-O',
           'description'=> 'Cousin of Stick-O'
          ],
          ['name' => 'Saddle Stitch',
           'description'=> 'Cowboy style'
          ],
          ['name' => 'Padded Stitch',
           'description'=> 'Need cover!'
          ],
          ['name' => 'Folded',
           'description'=> 'Double-sided Matte Lamination'
          ],

          ['name' => s'Smythsewn Perfect',

          ['Smythsewn Perfect',
           'description'=> 'Double-sided Matte Lamination'
          ],
          ['name' => 'Smythsewn Hardbound',
           'description'=> 'Double-sided Matte Lamination'
          ],
        ]);
    }
}