@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2 putih">
 <div class="title"><h2>Order <span>Menu</span></h2></div>
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
 {!! Form::model($admin, ['method' => 'PATCH','route' => ['orders.update', $admin->id]]) !!}
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Date:</strong>
 {!! Form::text('tgl', null, array('placeholder' => 'Format : YYYY-MM-DD','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Time :</strong>
 {!! Form::text('waktu', null, array('placeholder' => 'Format : HH:MM:mm','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-md-12">
 <div class="form-group">
 <strong>Is Delivery:</strong>
 {!! Form::select('isDeliv', array(
    'Yes' => 'Yes',
    'No' => 'No',
))!!}
 </div>
 </div>
 <div class="col-xs-6 col-sm-6 col-md-6 pull-left">
<button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </div>
{!! Form::close() !!}</br>
 </div>
 </div>
</div>
@endsection 