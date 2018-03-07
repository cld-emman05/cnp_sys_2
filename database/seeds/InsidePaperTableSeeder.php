<?php

use Illuminate\Database\Seeder;

class InsidePaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inside_papers')->insert([
            [
                'type' => '--', 
                'color' => 'null',
                'description' => 'null'
            ],
            [
                'type' => 'Poster [COLORED]', 
                'color' => 'Colored',
                'description' => 'C2S180'
            ],
            [
                'type' => 'Poster [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'C2S180#'
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
                'description' => 'MATT100#'
            ],
            [
                'type' => 'Yearbook [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'MATT100#'
            ],
            [
                'type' => 'Brochure [COLORED]', 
                'color' => 'Colored',
                'description' => 'C2S80#'
            ],
            [
                'type' => 'Brochure [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'C2S80#'
            ],
            [
                'type' => 'Calendar [COLORED]', 
                'color' => 'Colored',
                'description' => 'C2S140#'
            ],
            [
                'type' => 'Calendar [GRAYSCALE]', 
                'color' => 'Grayscale',
                'description' => 'C2S140#'
            ],
        ]);
    }
}
