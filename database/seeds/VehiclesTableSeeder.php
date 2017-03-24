<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        $limit = 40;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('vehicles')->insert([ //,
                'vehicle_group_id' => $faker->image,
                'type' => $faker->"sedan",
                'make' => $faker->"honda",
                'model' => $faker->"civic",
                'year' => $faker->date('y'),
                'fuel_type' => $faker->"petrol",
                'engine_capacity' => $faker->1800,
                'transmission' => $faker->"automatic",
                'Image' => $faker->image,
                'wheel_type' => $faker->"2 wheel drive",
                'price' => $faker->42000,
            ]);
        }
    }
}
