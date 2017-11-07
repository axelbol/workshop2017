<?php

use Illuminate\Database\Seeder;
//use App\User;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<98; $i++)
        {
            \DB::table('users')->insert(array(

            'name' => $faker->firstName,
            'email' => $faker->unique()->email,
            'password' =>\Hash::make('alvarado')
            ));
        }
    }
}
