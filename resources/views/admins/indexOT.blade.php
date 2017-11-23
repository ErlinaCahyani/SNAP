@extends('layouts.masterDashboard')
@section('contenkiri')
<!-- As a link -->
<nav class="navbar navbar-light putih">
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
          <a class="navbar-brand x" href="{{ route('manageorders.index') }}">Orders</a>
      </li>
      <li>
          <a class="navbar-brand biru" href="{{ route('manageordertotals.index') }}">Customer Orders</a>
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
 <h1>Manage Admins</h1>
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-right mb-1">
 <a class="btn btn-success" href="{{ route('managemenus.create') }}"> Create Account</a>
 </div>
 </div>
 <div class="col-lg-4">
 	{!! Form::open(['method'=>'GET','url'=>'admin/cari']) !!}
 	<div class="input-group custom-search-form">
 		<input type="text" class="form-control" name="search" placeholder="Search...">
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
 <th>Number</th>
 <th>ID Order</th>
 <th>Date</th>
 <th>Time</th>
 <th>isDelivery</th>
 <th>Total</th>
 <th width="200px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($admins as $key => $admin)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $admin->id }}</td>
 <td>{{ $admin->tgl }}</td>
 <td>{{ $admin->waktu }}</td>
 <td>{{ $admin->isdeliv}}</td>
 <td>{{ $admin->total }}</td>

 <td>
 <a class="btn btn-info"
href="{{ route('managemenus.show',$admin->id) }}">Detail</a>
 <a class="btn btn-primary"
href="{{ route('managemenus.edit',$admin->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' =>
['managemenus.destroy', $admin->id],'style'=>'display:inline']) !!}
 {!! Form::submit('Delete', ['class' => 'btn btndanger'])
!!}
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