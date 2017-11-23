<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use Hash;
//use App\Http\Middleware\isAdmin;

class ManageMenuController extends Controller
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
        $admins = Menu::orderBy('id','DESC')->paginate(5);
        return view('admins.indexMenu',compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /*
    Searching
    */
    public function search(Request $request)
    {
        $cari = $request->get('search');
        $admins = Menu::where('name','like','%'.$cari.'%')->paginate(10);
        return view('admins.indexMenu', compact('admins'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.createMenu');
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
         $admin = Menu::create($input);
         return redirect()->route('managemenus.index')
         ->with('success','Admin successfully added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Menu::find($id);
        return view('admins.showMenu',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Menu::find($id);
        return view('admins.editMenu',compact('admin')); 
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
         $admin = Menu::find($id);
         $admin->update($input);
         return redirect()->route('managemenus.index')->with('success','Admin successfully updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect()->route('managemenus.index')
        ->with('success','Admin successfully deleted');
    }
}
