<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Special;
use Hash;

class ManageSpecialController extends Controller
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
        $admins = Special::orderBy('id','DESC')->paginate(5);
        return view('admins.indexSpecial',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
	
	/*
    Searching
    */
    public function search(Request $request)
    {
        $cari = $request->get('search');
        $admins = Special::where('name','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexSpecial', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admins.createSpecial');   
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
         'desc' => 'required',
         'price' => 'required',
         'catagory' => 'required',
         ]);
         $input = $request->all();
         $admin = Special::create($input);
         return redirect()->route('managespecials.index')
         ->with('success','Special menus successfully added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin= Special::find($id);
		return view('admins.showSpecial',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Special::find($id);
		return view('admins.editSpecial',compact('admin'));
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
         'price' => 'required',
         'catagory' => 'required',
         'desc' => 'required',
         ]);
         $input = $request->all();
         $admin = Special::find($id);
         $admin->update($input);
         return redirect()->route('managespecials.index')->with('success','Special menus successfully updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Special::find($id)->delete();
        return redirect()->route('managespecials.index')
        ->with('success','Special menus successfully deleted');
    }
}
