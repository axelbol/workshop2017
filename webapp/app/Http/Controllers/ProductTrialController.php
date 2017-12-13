<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductTrial;
use App\Cart;
use App\Order;

use App\User;
use PDF;
use App\Http\Requests;
use Session;
use Auth;
class ProductTrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductTrial::all();
        return view('welcome', ['products' => $products]);
    }

    public function addtocart(Request $request, $id)
    {
        $product = ProductTrial::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('trial.index');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items)>0)
        {
            Session::put('cart', $cart);
        }
        else
        {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingcart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0)
        {
            Session::put('cart', $cart);
        }
        else
        {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingcart');
    }

    public function shoppingcart()
    {
        if(!Session::has('cart'))
        {
            return view ('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new  Cart($oldCart);
        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function save(Request $request)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        $order->name=$request->name;
        $order->last_name=$request->last_name;
        $order->address=$request->address;
        $order->nit=$request->nit;
        $order->total_price=$request->input('total_price');

        Auth::user()->orders()->save($order);

        return view('product.index');

    }

    public function pdf($id)
    {
        $order=new Order;
        $order = Order::find($id);

        //$pdf=PDF::loadView('invoice.pdf')->with('seller', $seller);

        $pdf = PDF::loadView('shop.pdf', ['order' => $order]);
        return $pdf->download('shop.pdf');
    }

    public function profile()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('profile', ['orders'=>$orders]);
    }

    public function view()
    {
        return view('shop.view');
    }

    public function get_dataTableCart()
    {
        $order=new Order();
        return datatables()->eloquent(Order::query())->toJson();
        //$sellers = Seller::All();
        //return view('seller.view', compact('sellers'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
