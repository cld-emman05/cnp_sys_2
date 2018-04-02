<?php

use Faker\Generator as Faker;

use App\User;
use App\Employee;
use App\Customer;
use App\Agent;
use App\Industry;
use App\Department;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->streetAddress,
        'contact' => $faker->tollFreePhoneNumber ,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('000000'),
        'remember_token' => str_random(10),
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});

$factory->define(App\Employee::class, function(Faker ($faker) use ($factory)){
  $user = $factory->raw('App\User');

  return[
    'flag' => 1,
    'user_id' => $faker->numberBetween(1, $user),
    'department_id' => 2,
  ];
});
