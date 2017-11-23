<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ordermenu;
use App\Menu;

class MOrderController extends Controller
{
    public function __construct()
    {
       $this->middleware('admin');
    }
    
    public function update($id)
    {
         $admin = Ordermenu::find($id);
         $admin -> update(['status'=>"Done"]);
         return redirect()->route('manageorders.index')->with('success','Done'); 
    }
}
