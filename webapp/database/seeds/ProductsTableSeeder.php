<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => str_random(10),
            'subtitle' => str_random(10),
            'category' => str_random(10),
            'condition' => str_random(10),
            'description' => str_random(10),
            'account_id' => 1,
        ]);
    }
}
