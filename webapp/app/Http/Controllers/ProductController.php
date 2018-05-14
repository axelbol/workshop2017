<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
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

//Axel
use App\ProductTrial;
use Session;
use Auth;
use App\User;
use App\Cart;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function principalView()
    {
        $products = Product::all();
        return view('principalView', ['products' => $products]);
    }

    public function addtocartAxel(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('principal.view');
    }

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
        dd($request->all());

        $Product = new Product($request->all());
        //$Product->save();
        if ($Product->format == "Precio fijo")
        {
            $FixedPrice = new FixedPrice($request->all());
            $FixedPrice->product()->associate($Product);
            //$FixedPrice->save();
        }
        if ($Product->format == "Subasta")
        {
            $AuctionMode = new AuctionMode($request->all());
            $AuctionMode->product()->associate($Product);
            //$AuctionMode->save();
        }
        if ($Product->donation == "true")
        {
            $Donation = new Donation($request->all());
            $Donation->product()->associate($Product);
            //$Donation->save();
        }
        if($Product->return == "true")
        {
            $Devolution = new Devolution($request->all());
            $Devolution->product()->associate($Product);
            //$Devolution->save();
        }

        $Package = new Package($request->all());
        $Package->product()->associate($Product);
        //$Package->save();

        $Payment = new Payment($request->all());
        $Payment->product()->associate($Product);
        //$Payment->save();

        $Schedule = new Schedule($request->all());
        $Schedule->product()->associate($Product);
        //$Schedule->save();

        $Shipping = new Shipping($request->all());
        if($Shipping->freeshipment == "true")
        {
            $Shipping->shipmentcost = 0;
        }
        $Shipping->product()->associate($Product);
        //$Shipping->save();

        $Storage = new Storage($request->all());
        $Storage->product()->associate($Product);
        //$Storage->save();



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
        $product = Product::find($product->id);
        $product->auctionmode;
        $product->devolution;
        $product->donation;
        $product->fixedprice;
        $product->package;
        $product->payment;
        $product->schedule;
        $product->shipping;
        $product->storage;

        return view('product.show')->with("product", $product);
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
    public function productData()
    {
        $product = Product::select(['id', 'title', 'format', 'condition', 'productdescription']);

        return Datatables::of($product)
            ->addColumn('action', function ($product) {
                return '<a href="http://localhost/workshop2017/webapp/public/product/'.$product->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                /*return "
                        <div class='item-actions-block'>


                                    <a class='remove' href='' data-toggle='modal' data-target='#confirm-modal'>
                                        <i class='fa fa-trash-o '></i>
                                    </a>                                

                        </div>
                        <div class='item-actions-block'>
                        <a class='edit' href='item-editor.html'>
                                        <i class='fa fa-pencil'></i>
                                    </a>
                        </div>
                        
                        ";*/
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }
}
