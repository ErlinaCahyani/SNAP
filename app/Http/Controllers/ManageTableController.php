<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Table;

class ManageTableController extends Controller
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
        $admins = Table::orderBy('id','DESC')->paginate(5);
        return view('admins.indexTable',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.createTable');
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
         'name' => 'required',
         'lokasi' => 'required',
         'kapasitas_min' => 'required',
         'status' => 'required',
         'desc' => 'required',
         ]);
         $input = $request->all();
         $admin = Table::create($input);
         return redirect()->route('managetables.index')
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
        $admin = Table::find($id);
        return view('admins.showTable',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Table::find($id);
        return view('admins.editTable',compact('admin'));
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
         'name' => 'required',
         'lokasi' => 'required',
         'kapasitas_min' => 'required',
         'status' => 'required',
         'desc' => 'required',
         ]);
         $input = $request->all();
         $admin = Table::find($id);
         $admin->update($input);
         return redirect()->route('managetables.index')->with('success','Admin successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Table::find($id)->delete();
        return redirect()->route('managetables.index')
        ->with('success','Admin successfully deleted');
    }
}
