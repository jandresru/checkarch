<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

	public function run(){
		\DB::table('users')->insert(array(
			'name' => 'Juli',
			'name' => 'Andrés',
			'email' => 'juli@tenactic.com',
			'type' => 'admin',
			'password' => \Hash::make('juli')
		));
	}

}