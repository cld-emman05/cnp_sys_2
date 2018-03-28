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
    //Users
    //$this->call(UserTypesTableSeeder::class);
    $this->call(DepartmentsSeeder::class);
    $this->call(DefaultUsersSeeder::class);
    $this->call(DefaultEmployeesSeeder::class);

    //Create Order Specification
  /*  $this->call(PaperTypeSeeder::class);
    $this->call(PaperColorSeeder::class);
    $this->call(LaminationSeeder::class);
    $this->call(BindingSeeder::class); */
  }
}
