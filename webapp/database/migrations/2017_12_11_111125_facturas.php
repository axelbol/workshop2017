<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nit');
            $table->string('address');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('iva', 10,2);
            $table->decimal('subTotal', 10,2);
            $table->decimal('total', 10,2);
            $table->timestamps();
        });

        Schema::create('invoice_items', function (Blueprint $table) {
            $table->decimal('quantity', 10,2);
            $table->decimal('unitPrice', 10,2);
            $table->decimal('total', 10,2);
            $table->timestamps();
        });

        // Foreign keys
        Schema::table('invoices', function ($table) {
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
        });

        Schema::table('invoice_items', function ($table) {
            $table->integer('invoice_id')->unsigned();
            $table->integer('productos_id')->unsigned();

            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('productos_id')->references('id')->on('productos');
        });

        // Default data
        DB::table('clients')->insert([
            ['name' => 'Eduardo Rodriguez', 'nit' => '12345678912', 'address' => 'Av. Obrajes 107'],
            ['name' => 'Juan Perez', 'nit' => '12345678912', 'address' => 'Av. San Lorenzo 108'],
            ['name' => 'Cesar Murillo', 'nit' => '64648512', 'address' => 'Av. Perez 105'],
            ['name' => 'Axel Alvarado', 'nit' => '85465896', 'address' => 'Av. Los Pinoss 104'],
            ['name' => 'Brenda Miranda', 'nit' => '7824512364', 'address' => 'Av. Montenegro 108'],
            ['name' => 'Juan Gonzales', 'nit' => '5852145625', 'address' => 'Av. Laja 101'],
        ]);

        DB::table('productos')->insert([
            ['name' => 'Guitarra eléctrica Fender', 'price' => 1000.50],
            ['name' => 'Amplicador Marshal JCM 2000', 'price' => 2000],
            ['name' => 'Play Statin', 'price' => 505.20],
            ['name' => 'TV', 'price' => 7000],
            ['name' => 'Radio', 'price' => 780.30],
            ['name' => 'Mouse', 'price' => 900],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
