<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Seller;

use Laracasts\Flash\Flash;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('seller.index');
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
        $seller=new Seller;
        $seller->name = $request->name;
        $seller->last_name = $request->last_name;
        $seller->address = $request->address;
        $seller->city = $request->city;
        $seller->email = $request->email;
        $seller->phono =$request->phono;
        $seller->save();


        return view ('product.create');
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
        $seller = Seller::find($id);
        return view('seller.edit')->with('seller', $seller);

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
        $seller = Seller::find($id);
        $seller -> name = $request -> name;
        $seller -> last_name = $request -> last_name;
        $seller -> address = $request -> address;
        $seller -> city = $request -> city;
        $seller -> email = $request -> email;
        $seller -> phono = $request -> phono;
        $seller -> save();

        //dd($seller);

        Flash::success("Se registro al vendedor de forma exitosa");
        return redirect()->route('viewseller');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller=Seller::find($id);
        $seller->delete();

        //dd($seller);
        return redirect()->route('viewseller');

    }

    public function view()
    {
        return view('seller.view');
    }

    public function get_dataTableSeller()
    {
        return datatables()->eloquent(Seller::query())->toJson();
        //$sellers = Seller::All();
        //return view('seller.view', compact('sellers'));
    }
}