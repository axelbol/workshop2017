<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CatalogSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ProductTrialSeeder::class);
    }
}
