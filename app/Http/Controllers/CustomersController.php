<?php

namespace App\Http\Controllers;
use App\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = customers::all();
        return view('internals.customer', [
            'anything' => $customers,
        ]);
    }


    public function store(Request $request){
        $name = $request['name'];
        $customer = new customers();
        $customer->name = $name;
        $customer->save();
        return back();
    }
}
