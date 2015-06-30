<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $fakerFactory = FakerFactory::create();

		DB::table('users')->insert(array(
			'name' => 'laravel',
			'roll' => 'Administrator',
			'email' => 'laravel@gmail.com',
			'password' => \Hash::make('secret')

			));
    }
}
