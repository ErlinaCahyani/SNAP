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
          <a class="navbar-brand x" href="/user">Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="">Reservations</a>
      </li>
      <li>
          <a class="navbar-brand x" href="">Profile</a>
      </li>
  </ul>
</nav>

@endsection
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8">
 <div class="title"><h2><span>Order History</span></h2></div>
           <div style="width: 10%;height: 2px;" class="maroon"></div>
                </br>
                <div class="row">
  <div class="col-md-6 pull-left">
  <a class="btn btn-success" href="{{ route('ordermenus.create') }}"> Add New Order</a>
  </div>
</div>
</br>
Note : if you choose delivery order, you must click "Delivery and Finish" and fill their form.
</br>
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <br/>
 <table id="table_admins" class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>ID Order</th>
 <th>Date</th>
 <th>Time</th>
 <th>IsDelivery</th>
 <th>Total</th>
 <th>IsAccepted</th>
 <th width="210px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($admins as $key => $admin)
 <tr>
 <td>{{ $admin->id }}</td>
 <td>{{ $admin->tgl }}</td>
 <td>{{ $admin->waktu }}</td>
 <td>{{ $admin->isdeliv }}</td>
 <td>{{ $admin->total }}</td>
 <td>{{ $admin->status }}</td>
 <td>
{!! Form::model($admin, ['method' => 'DELETE','route' => ['orders.destroy', $admin->id]]) !!}
{!! Form::submit('Cancel', ['class' => 'btn btn-warning'])
!!}
<a class="btn btn-primary" href="{{ route('orders.show',$admin->id) }}">Detail</a>
<a class="btn btn-info" href="{{ route('deliv.edit',$admin->id) }}">Delivery</a>
<a class="btn btn-info" href="{{ route('orders.edit',$admin->id,$a=1) }}">Finish</a>
{!! Form::close() !!}


 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 {!! $admins->render() !!}
 </div>
 </div>
</div>

 @endsection 