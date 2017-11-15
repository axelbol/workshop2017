<?php

use Illuminate\Database\Seeder;
use App\ProductTrial;
class ProductTrialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "Rusia";
        $trial->description="Trial";
        $trial->price=20;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "Brasil";
        $trial->description="Trial I";
        $trial->price=30;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "Argentina";
        $trial->description="Trial II";
        $trial->price=40;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "Nigeria";
        $trial->description="Trial III";
        $trial->price=50;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "China";
        $trial->description="Trial IV";
        $trial->price=60;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "Ecuador";
        $trial->description="Trial V";
        $trial->price=60;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.vexels.com/media/users/3/143012/raw/c1b3d27e98a9eb8c959cbc0de9fcd24c-rusia-2018-copa-del-mundo-de-dise-o-en-rojo.jpg";
        $trial->title = "Bolivia";
        $trial->description="Trial VI";
        $trial->price=70;
        $trial->save();
    }
}
