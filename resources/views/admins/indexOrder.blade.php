@extends('layouts.masterDashboard')

@section('contenkiri')
<!-- As a link -->
<?php  $nama = Auth::user()->name; ?>
<div class="title">
  <h2><?php echo strtoupper($nama); ?>'s <span>Dashboard</span></h2>
</div>

<nav class="navbar navbar-light">
  <ul>
      <li>
          <a class="navbar-brand x" href="/admin">Admin Home</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('managemenus.index') }}">Manage Menus</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('managetables.index') }}">Manage Tables</a>
      </li>
      <li>
          <a class="navbar-brand x" href="">Manage Specials</a>
      </li>
      <li>
          <a class="navbar-brand biru" href="{{ route('manageorders.index') }}">Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageordertotals.index') }}">Customer Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageresers.index') }}">Reservations</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageusers.index') }}">Manage Customer</a>
      </li>
  </ul>
</nav>

@endsection
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8">
 <div class="title"><h2><span>List Orders</span></h2></div>
           <div style="width: 10%;height: 2px;" class="maroon"></div>
                </br>
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="row">
 <div class="col-lg-8">
 	{!! Form::open(['method'=>'GET','url'=>'admin/cariorder']) !!}
 		<span class="input-group-btn">
 			<span class="input-group-btn">
 				<button class="btn btn-default" type="submit">
 					<i class="fa fa-search"></i>
 					Check Waiting Order
 				</button>
 			</span>
 		</span>
 		
 	</div>
 	{!! Form::close() !!}
 <div class="col-lg-4">
  {!! Form::open(['method'=>'GET','url'=>'admin/cariorder2']) !!}
  <div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="ID Order...">
    <span class="input-group-btn">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="fa fa-search"></i>
          Cari
        </button>
      </span>
    </span>
    
  </div>
  {!! Form::close() !!}
 </div>
 </div>
 <br/>
 <table id="table_admins" class="table table-bordered table-striped">
 <thead>
 <tr>
 <th width="70px">Number</th>
 <th>id Cust</th>
 <th>Menu Name</th>
 <th>Jumlah</th>
 <th>Total Harga</th>
 <th>Status</th>
 <th width="200px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($admins as $key => $admin)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $admin->idCus }}</td>
 <td>{{ $admin->name }}</td>
 <td>{{ $admin->jumlah }}</td>
 <td>{{ $admin->totalHarga }}</td>
 <td>{{ $admin->status }}</td>
 <td>
{!! Form::model($admin, ['method' => 'PATCH','route' => ['morder.update', $admin->id]]) !!}
{!! Form::submit('Done', ['class' => 'btn btnprimary'])
!!}
<a class="btn btn-info" href="{{ route('manageorders.show',$admin->id) }}">Detail</a>
{!! Form::close() !!}

 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 {!! $admins->render() !!}
 </div>
 </div>
 @endsection 