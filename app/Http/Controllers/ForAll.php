<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Special;
use Hash;

class ForAll extends Controller
{
	public function __construct()
    {
       $this->middleware('admin');
    }
	public function index(Request $request)
    {
        $admins = Menu::where('id',8);
        //$arr = (array) $admins;
        return view('welcome',compact('admins'));
    }
    
}
