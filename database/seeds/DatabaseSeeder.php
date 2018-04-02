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

    // for users
    $this->call(DepartmentsSeeder::class);
    $this->call(IndustrySeeder::class);

    $this->call(DefaultUsersSeeder::class);
    $this->call(DefaultEmployeesSeeder::class);
     $this->call(DefaultAgentsSeeder::class);
     $this->call(DefaultCustomersSeeder::class);

     //ORDER
     $this->call(PhaseSeeder::class);

    //Create Order Specification
    $this->call(BindingSeeder::class);
    $this->call(LaminationSeeder::class);
    $this->call(ColorsSeeder::class);
    $this->call(PaperTypeSeeder::class);
    $this->call(InsidePapersSeeder::class);
    $this->call(CoverPapersSeeder::class);
    $this->call(SizesSeeder::class);
    $this->call(SpecificationsSeeder::class);
  }
}
