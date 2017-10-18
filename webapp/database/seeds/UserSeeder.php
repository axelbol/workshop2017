<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> name = "Pedro";

        $user -> email = "pedro@gmail.com";
        $user -> password = "familia11";

        $user -> save();
    }
}
