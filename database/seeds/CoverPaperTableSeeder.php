<?php

use Illuminate\Database\Seeder;

class CoverPaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cover_papers')->insert([
            [
                'type' => '--', 
                'color' => 'null',
                'description' => 'null'
            ],
            [
                'type' => 'Books [COLORED]', 
                'color' => 'Colored',
                'description' => 'BP60#'
            ],
            [
                'type' => 'Books [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'BP60#'
            ],
            [
                'type' => 'Magazine [COLORED]', 
                'color' => 'Colored',
                'description' => 'C2S160#'
            ],
            [
                'type' => 'Magazine [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'C2S160#'
            ],
            [
                'type' => 'Yearbook [COLORED]', 
                'color' => 'Colored',
                'description' => 'C2S120#'
            ],
            [
                'type' => 'Yearbook [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'C2S120#'
            ]
        ]);
    }
}
