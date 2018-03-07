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

        ['first_name' => 'Crisostomo',
        'last_name' => 'Ibarra',
        'user_type' => 1, // User is a customer
        'contact' => null,
        'address' => '2401 Taft Avenue, Manila 1004',
        'company' => 'De La Salle University',
        'email' => 'customer@gemc.com',
        'password' => bcrypt('customer')],

        ['first_name' => 'Nidora',
        'last_name' => 'Zobeyala',
        'user_type' => 2, // User is a sales agent
        'contact' => null,
        'address' => null,
        'company' => null,
        'email' => 'agent@gemc.com',
        'password' => bcrypt('salesagent')],

        ['first_name' => 'Juan',
        'last_name' => 'Dela Cruz',
        'user_type' => 3, // User is the Administrator
        'contact' => null,
        'address' => null,
        'company' => null,
        'email' => 'admin@gemc.com',
        'password' => bcrypt('likeaboss')],

      ['first_name' => 'Fernando',
      'last_name' => 'Amorsolo',
      'user_type' => 4, // User is a pre-press
      'contact' => null,
      'address' => null,
      'company' => null,
      'email' => 'pre_press@gemc.com',
      'password' => bcrypt('pre_press')],

      ['first_name' => 'Andres',
      'last_name' => 'Bonifacio',
      'user_type' => 5, // User is a purchasing officer
      'contact' => null,
      'address' => null,
      'company' => null,
      'email' => 'purchasing@gemc.com',
      'password' => bcrypt('purchasing')],

      ['first_name' => 'Emilio',
      'last_name' => 'Jacinto',
      'contact' => null,
      'user_type' => 6, // User is a purchasing officer
      'address' => null,
      'company' => null,
      'email' => 'finance@gemc.com',
      'password' => bcrypt('finance')],
    ]);
    }
}
