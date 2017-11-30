<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use Hash;
use Auth;

class ReservationController extends Controller
{
    public function __construct()
    {
       $this->middleware('user');
    }
    public function index(Request $request)
    {
        $cari=Auth::user()->id;
        $admins = Reservation::where('idCus',$cari)->paginate(5);
        return view('users.Reser',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
         'idTable' => 'required',
         'idCus' => 'required',
         'tgl' => 'required',
         'waktu' => 'required',
         ]);
         $input = $request->all();
         $admin = Reservation::create($input);
         return redirect()->route('reserves.index')
         ->with('success','successfully added');
    }
    public function create()
    {
        return view('users.createReser');
    }
}
