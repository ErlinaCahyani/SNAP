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

class OrderTotalController extends Controller
{
    public function __construct()
    {
       $this->middleware('user');
    }
    public function index(Request $request)
    {
    	$cari=Auth::user()->id;
        $admins = Order::where('idCus',"2")->paginate(5);
        return view('users.order',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function show(Request $request, $id)
    {
        $admins = Cekorder::where('idOrder',$id)->paginate(5);
        return view('users.detailOrder',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
    	$cek = Ordertotal::find($id);
    	if ($cek ->status != "accepted") {
    		$wak = $cek->waktu - time();
    		if ($wak>'02:00:00') {
    			return redirect()->route('orders.index')
        		->with('success','Tidak dapat membatalkan order!');	
    		} else {
    			$admin = Ordertotal::find($id);
         		$stat = "Cancel";
         		$admin->update(['status'=>$stat,]);
		        return redirect()->route('orders.index')
		        ->with('success','successfully deleted');
    		}
    		
    	}else{
    		
    		return redirect()->route('orders.index')
        ->with('success','Tidak dapat membatalkan order! Pesanan sudah disetujui.');
    	}
        
    }

    public function store(Request $request)
    {
    	//$cek=$request->get('isdeliv');
    	$this->validate($request, [
		 'id' => 'required',
		 'image' => 'required|mimes:jpeg,png,jpg',
		 'alamat' => 'required',
		 ]);
    	$input = $request->all();
             $imageName = '';
			 if ( $request->hasFile('image')) {
			 $imageExtension = $request->file('image')->getClientOriginalExtension();
			 $imageName = 'image_'.time().'.'.$imageExtension;
			 $imageDestination = base_path() . '/public/uploads';
			 $request->file('image')->move($imageDestination, $imageName);
			 $input['image'] = $imageName;
			 }
			 $input['status'] = "waiting";

         $admin = Deliv::create($input);
         return redirect()->route('orders.index')->with('success','Finish');
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
         'tgl' => 'required',
         'waktu' => 'required',
         'isdeliv' => 'required',
         ]);
         $input = $request->all();
         $admin = Ordertotal::find($id);
         $admin->update($input);
         return redirect()->route('orders.index')->with('success','Admin successfully updated');
    }

    
    public function edit($id)
    {
        $admin = Ordertotal::find($id);
        $deliv = Deliv::find($id);
        return view('users.inputOrderDeliv',compact('admin','deliv'));
    }
}
