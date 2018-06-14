<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('contact')->insert([

			'id' => 1,
			'title' => 'title1',
			'body' => 'Contact',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 2,
			'title' => 'subtitle1',
			'body' => 'Cklick the arrow below to see where you can find me.',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 3,
			'title' => 'title2',
			'body' => 'Christos Chropoulos',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 4,
			'title' => 'subtitle2',
			'body' => 'Graphics ( Video - Animation ) & Sound Designer',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 5,
			'title' => 'email',
			'body' => 'chris.chairopoulos@hotmail.com',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 6,
			'title' => 'facebook',
			'body' => 'find me on facebook',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 7,
			'title' => 'phone',
			'body' => '+30 697 460 0005',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 8,
			'title' => 'main',
			'body' => 'Guitar player and vocals of',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 9,
			'title' => 'title3',
			'body' => 'BanDemoniC.',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 10,
			'title' => 'subtitle3',
			'body' => 'Details for the group you can find in the links below.',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 11,
			'title' => 'facebook2',
			'body' => 'Like',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 12,
			'title' => 'youtube',
			'body' => 'Subscribe',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 13,
			'title' => 'web',
			'body' => 'Official Web Site',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 14,
			'title' => 'twitter',
			'body' => 'Tweet',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('contact')->insert([

			'id' => 15,
			'title' => 'instagram',
			'body' => 'Follow',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		//
	}
}
