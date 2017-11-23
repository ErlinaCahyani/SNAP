<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
       $this->middleware('user');
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
         'idOrder' => 'required',
         'idCus' => 'required',
         'idMenu' => 'required',
         'jumlah' => 'required',
         ]);
         $input = $request->all();
         $admin = Ordermenu::create($input,['status'=>"Waiting"]);
         return redirect()->route('ordertotals.index')
         ->with('success','Admin successfully added'); 
    }

}
