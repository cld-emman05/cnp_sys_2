<?php

use Illuminate\Database\Seeder;

class BindingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binding_types')->insert([
            [
                'name' => '--',
                'description' => 'null',
            ],
            [
                'name' => 'Perfect',
                'description' => '',
            ],
            [
                'name' => 'Wire-O',
                'description' => '',
            ],
            [
                'name' => 'Saddle Stitch',
                'description' => '',

            ]
        ]);
    }
}
