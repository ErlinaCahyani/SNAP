@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2 putih">
 <div class="title"><h2>Order Delivery <span>Menu</span></h2></div>
 <div style="width: 10%;height: 2px;" class="maroon"></div>
 </br>
 <div class="row">
 	<div class="col-md-6 pull-left">
 	<a href="{{ route('orders.index') }}"><button class="btn btn-warning">Back</button></a>
 	</div>
</div>
</br>
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Sorry!</strong> Something wrong with your input data.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {!! Form::open(array('route' => 'orders.store','method'=>'POST', 'files'=>true)) !!}
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID Order:</strong>
 {!! Form::text('id', $admin->id, ['readonly']) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Address:</strong>
 {!! Form::text('alamat', null, array('placeholder' => 'Address that we must deliver your order ','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Image:</strong>
 {!! Form::file('image', null, array('class' => 'custom-file-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </div>
 {!! Form::close() !!}
</br>
 </div>
 </div>
 </div>
 @endsection