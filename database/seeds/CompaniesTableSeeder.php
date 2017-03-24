<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('organizations')->insert([ //,
                'logo' => $faker->image,
                'name' => $faker->company,
                'phone_number' => $faker->phoneNumber,
                'location' => $faker->address,
                'email' => $faker->unique()->email,
                'website' => $faker->name,
                'first_work_day' => $faker->name,
                'last_work_day' => $faker->name,
                'start_work_time' => $faker->time(),
                'end_work_time' => $faker->time(),
                'verified' => $faker->boolean,
                'date_verified' => $faker->dateTime,
            ]);
        }
    }
}
