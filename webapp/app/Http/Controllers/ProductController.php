<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateProduct;
use App\Product;
use App\ProductPhoto;
use App\Feature;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

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
        $product = new Product($request->all());
        $product->account_id = session('user')->id;
        $product->save();


        $feature = new Feature($request->all());
        //$product->features()->associate($product);
        //dd($feature);
        $num_elements = 0;

        //dd(count($feature['feature']));

        for($i=0;$i<count($feature['feature'])  ;$i++)
        {
            $data = new Feature();
            $data->feature = $feature['feature'][$num_elements];
            $data->desc = $feature['desc'][$num_elements];
            $data->product()->associate($product);
            $num_elements++;
            $data->save();
        }


        //$product->features()->saveMany($feature->getAttributes());

        //dd($request->feature, $request->desc);

        //$feature = new Feature($request->all());
        //echo $feature;
        //dd($feature);

        //$feature->save();

       // dd($feature);




        /*
        foreach ($request->feature as $feature)
        {
            echo $feature;
        }
        foreach ($request->desc as $desc)
        {
            echo $desc;
        }*/



        /*
        $product = new Product();
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->category = $request->category;
        $product->condition = $request->condition;
        $product->description = $request->description;
        $product->account_id = session('user')->id;

        foreach ($request->photo as $photo)
        {
            $filename = $photo->store('photo');
            ProductPhoto::create(['name' => $filename,
                                    'product_id' => $product->id]);
        }
        dd($product);*/
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
    public function anyData()
    {
        return datatables()->of(Product::query())->toJson();
    }
    public function getIndex()
    {
        return view('try.product.index');
    }
    public function indexDataTable()
    {
        $products = Product::all();
        return response()->json($products);
    }
    public function indexpro()
    {
        return view('try.product.datatable');
    }
}
