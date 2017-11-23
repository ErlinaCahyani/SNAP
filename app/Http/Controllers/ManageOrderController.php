<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ordermenu;
use App\Menu;
use App\Cekorder;

class ManageOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('admin');
    }
    public function index(Request $request)
    {
        $admins = Cekorder::orderBy('id','DESC')->paginate(5);
        return view('admins.indexOrder',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function search(Request $request)
    {
        $cari="Waiting";
        $admins = Cekorder::where('status','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexOrder', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function search2(Request $request)
    {
        $cari = $request->get('search');
        $admins = Cekorder::where('idOrder','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexOrder', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.createOrder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
         return redirect()->route('manageordertotals.index')
         ->with('success','Admin successfully added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Ordermenu::find($id);
        return view('admins.showOrder',compact('admin'));
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
        $this->validate($request, [
         'idOrder' => 'required',
         'idCus' => 'required',
         'idMenu' => 'required',
         'jumlah' => 'required',
         'totalHarga' => 'required',
         ]);
         $input = $request->all();
         $admin = Ordermenu::find($id);
         $admin->update($input);
         return redirect()->route('manageorders.index')->with('success','Admin successfully updated');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ordermenu::find($id)->delete();
        return redirect()->route('manageorders.index')
        ->with('success','Admin successfully deleted');
    }
}
