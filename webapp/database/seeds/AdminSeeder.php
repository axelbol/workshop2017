<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<2; $i++)
        {
            \DB::table('admins')->insert(array(

                'name' => $faker->firstName,
                'email' => $faker->unique()->email,
                'password' =>\Hash::make('alvarado')
            ));
        }
    }
}
