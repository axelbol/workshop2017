<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('category');
            $table->string('isbn');
            $table->string('condition');
            $table->text('conditiondescription');
            $table->text('productdescription');
            $table->string('format');
            $table->string('duration');
            $table->string('ad');

            //fixed price colums
            $table->integer('buynowprice')->nullable($value = true);
            $table->boolean('allowoffer')->nullable($value = true);
            $table->boolean('atleastoffer')->nullable($value = true);
            $table->integer('atleastofferis')->nullable($value = true);
            $table->boolean('lowoffer')->nullable($value = true);
            $table->integer('lowofferis')->nullable($value = true);

            //auction mode
            $table->integer('startprice')->nullable($value = true);
            $table->integer('buyprice')->nullable($value = true);
            $table->integer('reserveprice')->nullable($value = true);


            $table->integer('cuantity')->nullable($value = true);
            $table->boolean('lot')->nullable($value = true);
            $table->integer('cuantitylot')->nullable($value = true);
            $table->boolean('private')->nullable($value = true);
            $table->boolean('donation')->nullable($value = true);

            //payment options
            $table->boolean('paypal')->nullable($value = true);
            $table->string('emailpayment')->nullable($value = true);
            $table->boolean('pickpayment')->nullable($value = true);
            $table->text('paymentdescription')->nullable($value = true);

            //devolutions
            $table->boolean('return')->nullable($value = true);
            $table->integer('devolutiontime')->nullable($value = true);
            $table->string('refund')->nullable($value = true);
            $table->string('returnshipment')->nullable($value = true);
            $table->string('returndetails')->nullable($value = true);
            $table->string('restitutionfee')->nullable($value = true);

            //shipping details
            $table->string('domesticshipment')->nullable($value = true);
            $table->string('shipmentservice')->nullable($value = true);
            $table->integer('shipmentcost')->nullable($value = true);
            $table->boolean('freeshipment')->nullable($value = true);

            //package details
            $table->string('packagetype')->nullable($value = true);
            $table->integer('x')->nullable($value = true);
            $table->integer('y')->nullable($value = true);
            $table->integer('z')->nullable($value = true);
            $table->integer('kilograms')->nullable($value = true);
            $table->integer('grams')->nullable($value = true);

            $table->string('localization')->nullable($value = true);

            /*
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('personal_accounts');*/

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
