<?php

use Illuminate\Database\Seeder;

class DefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        DB::table('users')->insert([
          ['first_name' => 'Crisostomo',
            'last_name' => 'Ibarra',
            'contact' => '09221168711',
            'address' => 'Intramuros, Manila',
            'email' => 'customer@gemc.com',
<<<<<<< HEAD
            'password' => bcrypt('customer'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),]
=======
            'password' => bcrypt('customer')],
>>>>>>> parent of fcec799... Added More Seeders and added Another Customer
          ]);

          DB::table('users')->insert([
            ['first_name' => 'Maria Clara',
              'last_name' => 'Damaso',
              'contact' => '09221168711',
              'address' => 'Intramuros, Manila',
              'email' => 'sales@gemc.com',
<<<<<<< HEAD
              'password' => bcrypt('salesagent'),
              'created_at' => \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),]
=======
              'password' => bcrypt('salesagent')],
>>>>>>> parent of fcec799... Added More Seeders and added Another Customer
            ]);

              DB::table('users')->insert([
                ['first_name' => 'Juan',
                  'last_name' => 'Luna',
                  'contact' => '09221168711',
                  'address' => 'Nueva Ecija',
                  'email' => 'production@gemc.com',
<<<<<<< HEAD
                  'password' => bcrypt('production'),
                  'created_at' => \Carbon\Carbon::now(),
                  'updated_at' => \Carbon\Carbon::now(),]
=======
                  'password' => bcrypt('production')],
>>>>>>> parent of fcec799... Added More Seeders and added Another Customer
                ]);

                DB::table('users')->insert([
                  ['first_name' => 'Jose',
                    'last_name' => 'Rizal',
                    'contact' => '09221168711',
                    'address' => 'Calamba, Laguna',
                    'email' => 'purchasing@gemc.com',
                    'password' => bcrypt('purchasing'),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),]
=======
                    'password' => bcrypt('purchasing')],
>>>>>>> parent of fcec799... Added More Seeders and added Another Customer
                  ]);

              DB::table('users')->insert([
                ['first_name' => 'Simoun',
                  'last_name' => 'Ibarra',
                  'contact' => '09221168711',
                  'address' => 'Intramuros, Manila',
                  'email' => 'finance@gemc.com',
<<<<<<< HEAD
                  'password' => bcrypt('finance'),
                  'created_at' => \Carbon\Carbon::now(),
                  'updated_at' => \Carbon\Carbon::now(),]
=======
                  'password' => bcrypt('finance')],
>>>>>>> parent of fcec799... Added More Seeders and added Another Customer
                ]);
      }
    }
