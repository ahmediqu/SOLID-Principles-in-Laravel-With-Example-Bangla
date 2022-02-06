<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use App\Services\InvoiceService;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(InvoiceRequest $request, InvoiceService $service)
    {
        $invoice = $service->storeService($request->products, $request->quantities, $request->prices,);
        return $invoice;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
