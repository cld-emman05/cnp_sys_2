<?php

use Illuminate\Database\Seeder;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //for Inside
      DB::table('materials')->insert([
        [
         'name' => 'BP50',
         'description'=> 'Building Paper 50 GSM',
         'price' => '14.00',
         'paper_type_id' => '1'
        ],

        [
         'name' => 'BP60',
         'description'=> 'Building Paper 60 GSM',
         'price' => '16.80',
         'paper_type_id' => '2'
        ],

        [
         'name' => 'BP70',
         'description'=> 'Building Paper 70 GSM',
         'price' => '19.60',
         'paper_type_id' => '3'
        ],

        [
         'name' => 'C2S70',
         'description'=> 'Coated Paper Two Side 70 GSM',
         'price' => '17.50',
         'paper_type_id' => '4'
        ],

        [
         'name' => 'C2S80',
         'description'=> 'Coated Paper Two Side 80 GSM',
         'price' => '20.00',
         'paper_type_id' => '5'
        ],

        [
         'name' => 'C2S100',
         'description'=> 'Coated Paper Two Side 100 GSM',
         'price' => '25.00',
         'paper_type_id' => '6'
        ],

        [
         'name' => 'C2S120',
         'description'=> 'Coated Paper Two Side 120 GSM',
         'price' => '6.50',
         'paper_type_id' => '7'
        ],

        [
         'name' => 'C2S140',
         'description'=> 'Coated Paper Two Side 140 GSM',
         'price' => '8.00',
         'paper_type_id' => '8'
        ],

        [
         'name' => 'C2S160',
         'description'=> 'Coated Paper Two Side 160 GSM',
         'price' => '9.50',
         'paper_type_id' => '9'
        ],

        [
         'name' => 'C2S180',
         'description'=> 'Coated Paper Two Side 180 GSM',
         'price' => '10.50',
         'paper_type_id' => '10'
        ],

        [
         'name' => 'C2S220',
         'description'=> 'Coated Paper Two Side 220 GSM',
         'price' => '12.50',
         'paper_type_id' => '11'
        ],
    ]);
    }
}
