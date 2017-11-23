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

            //Product description
            $table->string('title');
            $table->string('subtitle');
            $table->string('category');
            $table->string('isbn');
            $table->string('condition');
            $table->text('conditiondescription');
            $table->text('productdescription');

            //Selling format
            $table->string('format');

            //Set a product as private
            $table->boolean('private');

            //Any donations
            $table->boolean('donation');

            //devolution
            $table->boolean('return');

            //Item location
            $table->string('localization');

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
