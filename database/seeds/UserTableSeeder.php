<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run(){

		for($i=0;$i<100;$i++){

			$faker = Faker::create();

			\DB::table('users')->insert(array(
				'name' => $faker->firstName,
				'email' => $faker->email,
				'type' => 'user',
				'password' => \Hash::make('1234')
			));

		}

	}

}