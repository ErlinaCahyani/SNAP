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
 {!! Form::open(array('route' => 'managemenus.store','method'=>'POST')) !!}
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name:</strong>
 {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Price:</strong>
 {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Catagory:</strong>
</br>
 <!--{!! Form::text('job_title', null, array('placeholder' => 'Job title','class' => 'form-control')) !!}-->
 {!! Form::select('catagory', array(
    'Seafood' => 'Seafood',
    'Pasta' => 'Pasta',
    'Salad' => 'Salad',
    'Desert'=> 'Desert',
    'Drink' => 'Drink', 'class' => 'form-control'
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