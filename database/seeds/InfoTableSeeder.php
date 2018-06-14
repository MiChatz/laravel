<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('info')->insert([

			'id' => 1,
			'title' => 'title1',
			'body' => 'ABOUT ME',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		DB::table('info')->insert([

			'id' => 2,
			'title' => 'subtitle1',
			'body' => 'Here you can find a short presentations of my background.',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 3,
			'title' => 'subtitle2',
			'body' => 'Christos A. Chairopoulos',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 4,
			'title' => 'main1',
			'body' => 'I have had experience designing
                for numerous companies, creating a wide variety of designs
                to suit the needs of the individual.
                I can ',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 5,
			'title' => 'main2',
			'body' => 'produce',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 6,
			'title' => 'main3',
			'body' => 'and edit your',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 7,
			'title' => 'main4',
			'body' => 'video, animation',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 8,
			'title' => 'main5',
			'body' => 'graphics / sound',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 9,
			'title' => 'main6',
			'body' => 'design projects.
                I am skilled on',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 10,
			'title' => 'main7',
			'body' => 'Illustrator, Photoshop',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 11,
			'title' => 'main8',
			'body' => 'as well as',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 12,
			'title' => 'main9',
			'body' => 'After Effects',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 13,
			'title' => 'main10',
			'body' => 'and',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 14,
			'title' => 'main11',
			'body' => 'Premiere.',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 15,
			'title' => 'main12',
			'body' => 'I also use.',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 16,
			'title' => 'main13',
			'body' => 'ZBrush',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 17,
			'title' => 'main14',
			'body' => 'and',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 18,
			'title' => 'main15',
			'body' => '3DsMax',
			'created_at' => now(),
			'updated_at' => now(),

		]);

		DB::table('info')->insert([

			'id' => 19,
			'title' => 'main16',
			'body' => 'for various projects.
                I make sure I design everything in the shortest time possible
                while keeping a high standard of work.',
			'created_at' => now(),
			'updated_at' => now(),

		]);
		//
	}
}
