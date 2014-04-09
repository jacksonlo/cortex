<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		//Jackson User
		User::create(array(
			'username'=>'jackson',
			'password'=>Hash::make('jackson'),
			'name'=>'Jackson Lo',
			'email'=>'7jackson.lo@gmail.com',
		));

	}

}