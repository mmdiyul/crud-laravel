<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create('id_ID');
      foreach (range(0,10) as $i) {
        // code...
        DB::table('users')->insert([
          'name' => $faker->name,
          'birth' => $faker->dateTimeThisCentury()->format('Y-m-d'),
          'address' => $faker->address
        ]);
      }
    }
}
