<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

  public function run(){
    $this->call(UserTypesTableSeeder::class);
    $this->call(DefaultUsersSeeder::class);
    $this->call(JobTypeTableSeeder::class);
    $this->call(SizeTypeTableSeeder::class);
    $this->call(CoverPaperTableSeeder::class);
    $this->call(InsidePaperTableSeeder::class);
    $this->call(LaminationTypeTableSeeder::class);
    $this->call(BindingTypeTableSeeder::class);
  }
}
