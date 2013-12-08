<?php


class UserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'username' => 'miguel',
			'password' => Hash::make('password')
		));

		User::create(array(
			'username' => 'pedro',
			'password' => Hash::make('password')
		));
	}
}














