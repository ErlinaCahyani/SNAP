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
          <a class="navbar-brand x" href="{{ route('orders.index') }}">Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('reserves.index') }}">Reservations</a>
      </li>
      
  </ul>
</nav>

@endsection
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8">
 <div class="title"><h2><span>Reservations</span></h2></div>
           <div style="width: 10%;height: 2px;" class="maroon"></div>
                </br>
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
<div class="row">
  <div class="col-md-6 pull-left">
  <a class="btn btn-success" href="{{ route('reserves.create') }}"> Add New Reservation</a>
  </div>
</div>
 <br/>
 <table id="table_admins" class="table table-bordered table-striped">
 <thead>
 <tr>
 <th width="70px">Number</th>
 <th>Name</th>
 <th>Price</th>
 <th>Catagory</th>
 <th width="200px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($admins as $key => $admin)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $admin->idCus }}</td>
 <td>{{ $admin->idTable }}</td>
 <td>{{ $admin->tgl }}</td>
 <td>{{ $admin->waktu }}</td>
 <td>
<!--<a class="btn btn-info"
href="{{ route('reserves.show',$admin->id) }}">Detail</a>
<a class="btn btn-primary"
href="{{ route('reserves.edit',$admin->id) }}">Edit</a>-->
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 {!! $admins->render() !!}
 </div>
 </div>
 @endsection 