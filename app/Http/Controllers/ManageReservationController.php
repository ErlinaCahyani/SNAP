<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use Hash;

class ManageReservationController extends Controller
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
    public function search(Request $request)
    {
        $cari = $request->get('search');
        $admins = Reservation::where('waktu','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexReser', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function index(Request $request)
    {
        $admins = Reservation::orderBy('id','DESC')->paginate(5);
        return view('admins.indexReser',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
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
        $admin = Reservation::find($id);
        return view('admins.showReser',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Reservation::find($id);
        return view('admins.editReser',compact('admin'));
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
         'idCus' => 'required',
         'idTable' => 'required',
         'tgl' => 'required',
         'waktu' => 'required',
         ]);
         $input = $request->all();
         $admin = Reservation::find($id);
         $admin->update($input);
         return redirect()->route('manageresers.index')->with('success','Admin successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::find($id)->delete();
        return redirect()->route('manageresers.index')
        ->with('success','Admin successfully deleted');
    }
}
