<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateProduct;
use App\Product;
use App\AuctionMode;
use App\Devolution;
use App\Donation;
use App\FixedPrice;
use App\Package;
use App\Payment;
use App\Schedule;
use App\Shipping;
use App\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateProduct $request)
    {

        $Product = new Product($request->all());
        $Product->save();
        if ($Product->format == "Precio fijo")
        {
            $FixedPrice = new FixedPrice($request->all());
            $FixedPrice->product()->associate($Product);
            $FixedPrice->save();
        }
        if ($Product->format == "Subasta")
        {
            $AuctionMode = new AuctionMode($request->all());
            $AuctionMode->product()->associate($Product);
            $AuctionMode->save();
        }
        if ($Product->donation == "true")
        {
            $Donation = new Donation($request->all());
            $Donation->product()->associate($Product);
            $Donation->save();
        }
        if($Product->return == "true")
        {
            $Devolution = new Devolution($request->all());
            $Devolution->product()->associate($Product);
            $Devolution->save();
        }

        $Package = new Package($request->all());
        $Package->product()->associate($Product);
        $Package->save();

        $Payment = new Payment($request->all());
        $Payment->product()->associate($Product);
        $Payment->save();

        $Schedule = new Schedule($request->all());
        $Schedule->product()->associate($Product);
        $Schedule->save();

        $Shipping = new Shipping($request->all());
        if($Shipping->freeshipment == "true")
        {
            $Shipping->shipmentcost = 0;
        }
        $Shipping->product()->associate($Product);
        $Shipping->save();

        $Storage = new Storage($request->all());
        $Storage->product()->associate($Product);
        $Storage->save();


        dd($request->all());
        //$x->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
