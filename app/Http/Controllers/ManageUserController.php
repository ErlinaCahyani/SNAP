<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

class ManageUserController extends Controller
{
    public function __construct()
    {
       $this->middleware('admin');
    }
    public function index(Request $request)
    {
        $cari="User";
        $admins = User::where('type','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexUser', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('manageusers.index')
        ->with('success','Admin successfully deleted');
    }
    public function show($id)
    {
        $admin = User::find($id);
        return view('admins.showUser',compact('admin'));
    }
    public function search(Request $request)
    {
        $cari = $request->get('search');
        $admins = User::where('name','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexUser', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
