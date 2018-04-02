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
        [
          'first_name' => 'Juan',
          'last_name' => 'Dela Cruz',
          'contact' => '09221168711',
          'address' => 'Sta. Ana, Manila',
          'email' => 'administrator@gemc.com',
          'password' => bcrypt('administrator'),
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now(),]
        ]);

<<<<<<< HEAD
      DB::table('users')->insert([
        [
          'first_name' => 'Crisostomo',
          'last_name' => 'Ibarra',
          'contact' => '09221168711',
          'address' => 'Intramuros, Manila',
          'email' => 'customer@gemc.com',
          'password' => bcrypt('customer')],
        ]);

      DB::table('users')->insert([
        [
          'first_name' => 'Maria Clara',
          'last_name' => 'Damaso',
          'contact' => '09221168711',
          'address' => 'Intramuros, Manila',
          'email' => 'sales@gemc.com',
          'password' => bcrypt('salesagent')],
        ]);

      DB::table('users')->insert([
        [
          'first_name' => 'Juan',
          'last_name' => 'Luna',
          'contact' => '09221168711',
          'address' => 'Nueva Ecija',
          'email' => 'production@gemc.com',
          'password' => bcrypt('production')],
        ]);

      DB::table('users')->insert([
        [
          'first_name' => 'Jose',
          'last_name' => 'Rizal',
          'contact' => '09221168711',
          'address' => 'Calamba, Laguna',
          'email' => 'purchasing@gemc.com',
          'password' => bcrypt('purchasing')],
        ]);

      DB::table('users')->insert([
        [
          'first_name' => 'Simoun',
          'last_name' => 'Ibarra',
          'contact' => '09221168711',
          'address' => 'Intramuros, Manila',
          'email' => 'finance@gemc.com',
          'password' => bcrypt('finance')],
        ]);

      DB::table('users')->insert([
        [
          'first_name' => 'Pespi',
          'last_name' => 'Boople',
          'contact' => '09471569330',
          'address' => 'Katipunan Ave, Quezon City, 1108 Metro Manila',
          'email' => 'customer2@gemc.com',
          'password' => bcrypt('customer')],
        ]);
=======
        DB::table('users')->insert([
          ['first_name' => 'Crisostomo',
            'last_name' => 'Ibarra',
            'contact' => '09221168711',
            'address' => 'Intramuros, Manila',
            'email' => 'customer@gemc.com',
            'password' => bcrypt('customer'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),]
          ]);

          DB::table('users')->insert([
            ['first_name' => 'Maria Clara',
              'last_name' => 'Damaso',
              'contact' => '09221168711',
              'address' => 'Intramuros, Manila',
              'email' => 'sales@gemc.com',
              'password' => bcrypt('salesagent'),
              'created_at' => \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),]
            ]);

              DB::table('users')->insert([
                ['first_name' => 'Juan',
                  'last_name' => 'Luna',
                  'contact' => '09221168711',
                  'address' => 'Nueva Ecija',
                  'email' => 'production@gemc.com',
                  'password' => bcrypt('production'),
                  'created_at' => \Carbon\Carbon::now(),
                  'updated_at' => \Carbon\Carbon::now(),]
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
                  ]);

              DB::table('users')->insert([
                ['first_name' => 'Simoun',
                  'last_name' => 'Ibarra',
                  'contact' => '09221168711',
                  'address' => 'Intramuros, Manila',
                  'email' => 'finance@gemc.com',
                  'password' => bcrypt('finance'),
                  'created_at' => \Carbon\Carbon::now(),
                  'updated_at' => \Carbon\Carbon::now(),]
                ]);
>>>>>>> af61d6418dfce95eef48a5d57d3e2fa7b44b2194
      }
    }
