<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Seller;
class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = Faker::create();
        for($i=0; $i<100; $i++)
        {
            $seller = new Seller;
            $seller->name = "Axel";
            $seller->last_name = "Alvarado";
            $seller->address = "Obrajes";
            $seller->city = "La Paz";
            $seller->email = "axel@axel.com";
            $seller->phono = "72565435";
            $seller->save();

        }

    }
}
