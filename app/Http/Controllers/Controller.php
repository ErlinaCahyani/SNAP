<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        if(Auth::user()->type=="Admin"){
			//return view('admins.adminHome');
			$this->middleware('isAdmin');
		} else if(Auth::user()->type=="User"){
			$this->middleware('isUser');
		}
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        if(Auth::user()->type=="Admin"){
			return view(admins.adminHome);
		} else {
			return view(userHome);
		}
        //return view('admin');
    }
*/
}
