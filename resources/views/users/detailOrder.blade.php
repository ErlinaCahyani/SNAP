@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2 putih">
 <div class="title"><h2>Detail <span>Order</span></h2></div>
 <div style="width: 10%;height: 2px;" class="maroon"></div>
</br>
<div class="row">
 	<div class="col-md-6 pull-left">
 	<a href="{{ route('orders.index') }}"><button class="btn btn-warning">Back</button></a>
 	<a class="btn btn-success" href="{{ route('ordermenus.create') }}"> Add New Order</a>
 	</div>
 	<div class="col-md-6 pull-right">
 	Note : to Finish this Order, click Back and Click Finish
 </div>
</div>
</br>
 <table id="table_admins" class="table table-bordered table-striped">
 <thead>
 <tr>
 <th width="70px">Number</th>
 <th>Menu Name</th>
 <th>Jumlah</th>
 <th>Total Harga</th>
 <th width="200px">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($admins as $key => $admin)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $admin->name }}</td>
 <td>{{ $admin->jumlah }}</td>
 <td>{{ $admin->totalHarga }}</td>
 <td>
<a class="btn btn-primary" href="{{ route('ordermenus.edit',$admin->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' =>
['ordermenus.destroy', $admin->id],'style'=>'display:inline']) !!}
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
</div>
@endsection