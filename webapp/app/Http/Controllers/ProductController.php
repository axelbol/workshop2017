<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateProduct;
use App\Product;
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

       // $x = new Product($request->all());
        /*
        $product->title = $request->title;
        $product->subtitle = $request->subtitle ;
        $product->category = $request->category ;
        $product->isbn = $request->isbn ;
        $product->condition = $request->condition ;
        $product->conditiondescription = $request->conditiondescription ;
        $product->productdescription = $request->productdescription ;
        $product->format = $request->format;
        $product->duration = $request->duration ;
        $product->ad = $request->ad ;
        $product->buynowprice = $request->buynowprice ;
        $product->allowoffer = $request->allowoffer ;
        $product->atleastoffer = $request->atleastoffer ;
        $product->atleastofferis = $request->atleastofferis ;
        $product->lowoffer = $request->lowoffer ;
        $product->lowofferis = $request->lowofferis ;
        $product->startprice = $request->startprice ;
        $product->buyprice = $request->buyprice ;
        $product->reserveprice = $request->reserveprice ;
        $product->cuantity = $request->cuantity ;
        $product->lot = $request->lot ;
        $product->cuantitylot = $request->cuantitylot ;
        $product->private = $request->private ;
        $product->donation = $request->donation ;
        $product->paypal = $request->paypal ;
        $product->emailpayment = $request->emailpayment ;
        $product->pickpayment = $request->pickpayment ;
        $product->paymentdescription = $request->paymentdescription ;
        $product->return = $request->return ;
        $product->devolutiontime = $request->devolutiontime ;
        $product->refund = $request->refund ;
        $product->returnshipment = $request->returnshipment ;
        $product->returndetails = $request->returndetails ;
        $product->restitutionfee = $request->restitutionfee ;
        $product->domesticshipment = $request->domesticshipment ;
        $product->shipmentservice = $request->shipmentservice ;
        $product->shipmentcost = $request->shipmentcost ;
        $product->freeshipment = $request->freeshipment ;
        $product->packagetype = $request->packagetype ;
        $product->x = $request->x ;
        $product->y = $request->y ;
        $product->z = $request->z ;
        $product->kilograms = $request->kilograms ;
        $product->grams = $request->grams ;
        $product->localization = $request->localization ;*/

        //dd($x);
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
