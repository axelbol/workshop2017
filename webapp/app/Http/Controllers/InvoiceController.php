<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request,
    App\Repositories\ClientRepository,
    App\Repositories\InvoiceRepository,
    App\Http\Requests,
    PDF;
class InvoiceController extends Controller
{
    private $_clientRepo;
    private $_productRepo;
    //private $_invoiceRepo;
    public function __CONSTRUCT(ClientRepository $clientRepo,
                                ProductRepository $productRepo)
                                //InvoiceRepository $invoiceRepo)
    {
        $this->_clientRepot = $clientRepo;
        $this->_productRepo = $productRepo;
        //$this->_invoiceRepo = $invoiceRepo;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoice.index');
    }

    public function add()
    {
        return view('invoice.add');
    }

    public function findClient(Request $req)
    {
        return $this->_clientRepo->findByName($req->input('q'));
    }

    public function findProduct(Request $req)
    {
        return $this->_productRepo
            ->findByName($req->input('q'));
    }

    public function pdf($id)
    {
        $seller = Seller::find($id);

        $pdf = PDF::loadView('seller.edit');
        return $pdf->download('seller.edit');
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
