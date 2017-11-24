<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Ordertotal;
use App\Order;
use App\Ordermenu;
use App\Cekorder;
use App\Deliv;
use Auth;


class x extends Controller
{
	public function __construct()
    {
       $this->middleware('user');
    }
    public function edit($id)
    {
        $admin = Ordertotal::find($id);
        return view('users.finishOrder',compact('admin'));
    }
}
