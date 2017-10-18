<?php

use Illuminate\Database\Seeder;

class PersonalAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'lusi',
            'last_name'     =>  'mollo',
            'email'         =>  'luis@luis.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'seller',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  str_random(10),
            'last_name'     =>  str_random(10),
            'email'         =>  str_random(10).'@gmail.com',
            'password'      =>  bcrypt('miranda'),
            'type'          =>  'buyer',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'jorge',
            'last_name'     =>  'mollo',
            'email'         =>  'jorge@luis.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'buyer',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'aldo',
            'last_name'     =>  'chavez',
            'email'         =>  'aldo@aldo.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'seller',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'claudia',
            'last_name'     =>  'perez',
            'email'         =>  'claudia@gmail.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'buyer',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'edgar',
            'last_name'     =>  'ramirez',
            'email'         =>  'edgar@edgar.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'seller',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'salomon',
            'last_name'     =>  'acarapi',
            'email'         =>  'salomon@gmail.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'buyer',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'ana',
            'last_name'     =>  'molina',
            'email'         =>  'ana@luis.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'seller',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'cliver',
            'last_name'     =>  'paco',
            'email'         =>  'cliver@luis.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'buyer',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'leonel',
            'last_name'     =>  'torrez',
            'email'         =>  'leo@luis.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'seller',
        ]);
        DB::table('personal_accounts')->insert
        ([
            'first_name'    =>  'wilson',
            'last_name'     =>  'wegner',
            'email'         =>  'wilson@luis.com',
            'password'      =>  bcrypt('alvarado'),
            'type'          =>  'buyer',
        ]);
    }
}
