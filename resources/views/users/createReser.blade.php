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
  <a href="{{ route('orders.index') }}"><button class="btn btn-warning">CANCEL RESERVATION</button></a>
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
 {!! Form::open(array('route' => 'reserves.store','method'=>'POST')) !!}
 <div class="row">

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID:</strong>
</br>
{!! Form::text('idCus',(Auth::user()->id) , ['readonly']) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID Table :</strong>
 {!! Form::text('idTable', null, array('placeholder' => 'Table','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Date :</strong>
 {!! Form::text('tgl', null, array('placeholder' => 'Jumlah','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Time :</strong>
 {!! Form::text('waktu', null, array('placeholder' => 'Jumlah','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-6 col-sm-6 col-md-6 pull-left">
 <button type="submit" class="btn btn-primary">ADD ORDER</button>
 </div>
 </div>
 {!! Form::close() !!}</br>
 </div>
 </div>
</div>
@endsection 