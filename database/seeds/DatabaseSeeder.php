<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		$this->call([

			InfoTableSeeder::class,
			PortfolioTableSeeder::class,
			ContactTableSeeder::class,

		]);
		// $this->call(UsersTableSeeder::class);
	}
}
