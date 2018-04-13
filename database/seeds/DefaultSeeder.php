<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
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

    // Creating the administrator's account
    DB::table('users')->insert([
      ['first_name' => 'Juan',
        'last_name' => 'Dela Cruz',
        'contact' => '09221168711',
        'address' => 'Sta. Ana, Manila',
        'email' => 'administrator@gemc.com',
        'password' => bcrypt('administrator'),
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),]
      ]);

      DB::table('employees')->insert([
        ['flag' => '1', // employee is still hired
         'user_id' => '1',
         'department_id' => '1',
       ]
     ]);

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

    //QUOTATION
    $this->call(StatusesSeeder::class);


        //SUPPLIERS
        $this->call(TermsSeeder::class);
  }
}
