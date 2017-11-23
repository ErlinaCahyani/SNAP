@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2">
 <h1>Create Account</h1>
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
 {!! Form::open(array('route' => 'manageorders.store','method'=>'POST')) !!}
 <div class="row">

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID Order:</strong>
</br>
{!! Form::text('idOrder',(Auth::user()->id.date("Ymd")) , ['readonly']) !!}
{!! Form::text('idCus',(Auth::user()->id) , ['readonly']) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID Menu :</strong>
 {!! Form::text('idMenu', null, array('placeholder' => 'Menu','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Jumlah :</strong>
 {!! Form::text('jumlah', null, array('placeholder' => 'Jumlah','class' => 'form-control')) !!}
 </div>
 </div>
 
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">ADD ORDER</button>
 </div>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection 