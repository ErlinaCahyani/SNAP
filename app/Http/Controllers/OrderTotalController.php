<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderTotalController extends Controller
{
    public function index(Request $request)
    {
        $admins = Ordertotal::orderBy('id','DESC')->paginate(5);
        return view('users.indexOT',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
