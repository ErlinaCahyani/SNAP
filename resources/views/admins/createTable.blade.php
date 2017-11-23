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
 {!! Form::open(array('route' => 'managetables.store','method'=>'POST')) !!}
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name:</strong>
 {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Maximum Capacity:</strong>
 {!! Form::text('kapasitas_min', null, array('placeholder' => 'Minimum Capacity','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Location:</strong>
</br>
{!! Form::select('lokasi', array(
    'Luar' => 'luar',
    'Dalam' => 'dalam',
    'class' => 'form-control'
))!!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Status:</strong>
</br>
{!! Form::select('status', array(
    'Unbooked' => 'Unbooked',
))!!}
 </div>
 </div>
<div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Description:</strong>
 {!! Form::text('desc', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">ADD MENU</button>
 </div>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection 