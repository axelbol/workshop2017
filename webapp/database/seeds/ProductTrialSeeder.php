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
        $trial->imagePath = "https://car-pictures.cars.com/images/?IMG=USC60LEC171A021001.jpg&HEIGHT=600";
        $trial->title = "CAR";
        $trial->description="Trial";
        $trial->price=20;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "http://s3.amazonaws.com/digitaltrends-uploads-prod/2013/10/desktop-computer1.jpg";
        $trial->title = "DESKTOP";
        $trial->description="Trial I";
        $trial->price=30;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://images.homedepot-static.com/productImages/57114fd0-af41-452a-ae5a-65cc6610ffdf/svn/jeld-wen-picture-windows-thdjw142100077-64_400_compressed.jpg";
        $trial->title = "WINDOW";
        $trial->description="Trial II";
        $trial->price=40;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://brain-images-ssl.cdn.dixons.com/8/4/10141248/l_10141248_001.jpg";
        $trial->title = "TV";
        $trial->description="Trial III";
        $trial->price=50;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://rukminim1.flixcart.com/image/704/704/fm-radio/y/a/z/pagaria-5-band-usb-support-rechargeable-battery-original-imae9eh7g4n8rzet.jpeg";
        $trial->title = "RADIO";
        $trial->description="Trial IV";
        $trial->price=60;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5709/5709998_sa.jpg";
        $trial->title = "CELL PHONE";
        $trial->description="Trial V";
        $trial->price=60;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://loqueva.com/wp-content/uploads/2017/05/mp3-loqueva.jpg";
        $trial->title = "MP3";
        $trial->description="Trial VI";
        $trial->price=70;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://brain-images-ssl.cdn.dixons.com/8/4/10141248/l_10141248_001.jpg";
        $trial->title = "PLAY STATION 4";
        $trial->description="Trial VI";
        $trial->price=70;
        $trial->save();

        $trial = new ProductTrial;
        $trial->imagePath = "https://secure.img1-fg.wfcdn.com/im/01536170/resize-h600-w600%5Ecompr-r85/3888/38880176/Brookby+Place+Upholstered+Platform+Bed.jpg";
        $trial->title = "BED";
        $trial->description="Trial VI";
        $trial->price=70;
        $trial->save();
    }
}
