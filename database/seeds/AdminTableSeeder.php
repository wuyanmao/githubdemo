<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$faker = \Faker\Factory::create('zh_CN');
		$line = [];
		foreach (range(1, 3) as $index) {
				$line = [
					'username' => $faker->userName,
					'password' => bcrypt('123456'),
					'gender' => rand(1, 3),
					'mobile' => $faker->phoneNumber,
					'email' => $faker->email,
					'role_id' => rand(1, 6),
					'created_at' => date('Y-m-d H:i:s', time()),
					'status' => rand(1, 2)
				];
			}
		DB::table('admin') -> insert($line);
    }
}
