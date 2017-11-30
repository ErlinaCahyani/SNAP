<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ordermenu;
use App\Menu;
use App\Cekorder;

class OrderController extends Controller
{
    public function __construct()
    {
       $this->middleware('user');
    }
    public function index(Request $request)
    {
        
        $admins = Cekorder::orderBy('id','DESC')->paginate(5);
        return view('users.order',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
        
    }

    public function edit($id)
    {
        $admin = Ordermenu::find($id);
        return view('users.editOrder',compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
         'idMenu' => 'required',
         'jumlah' => 'required',
         ]);
         $input = $request->all();
         $admins = Ordermenu::find($id);
         $admins->update($input);
         return redirect()->route('orders.show',$admins->idOrder)
         ->with('success','Admin successfully Update');
         //return view('users.detailOrder',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
         //return view('users.order',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('users.createOrder');
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
         return redirect()->route('orders.index')
         ->with('success','Admin successfully added'); 
    }

}
