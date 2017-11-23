@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-10 col-md-offset-1">
 <div class="title"><h1>Add<span> Menu</span></h1>
	<div style="width: 10%;height: 2px;" class="maroon"></div>
 </div>
 <div class="pull-left mb-5">
 <a class="btn btn-success" href="{{ route('managemenus.index') }}"> Back</a>
 </div>
</br></br>
</div>

 <div class="row">
 <div class="col-md-8 col-md-offset-2 putih p3">
 	
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Sorry!</strong> Something wrong with your input data.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
</div>
</div>

 @endif
 {!! Form::open(array('route' => 'managemenus.store','method'=>'POST')) !!}
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 <div class="form-group">
 <strong>Name:</strong>
 {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-md-10 col-md-offset-1">
 <div class="form-group">
 <strong>Price:</strong>
 {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-md-10 col-md-offset-1">
 <div class="form-group">
 <strong>Catagory:</strong>
</br>
 <!--{!! Form::text('job_title', null, array('placeholder' => 'Job title','class' => 'form-control')) !!}-->
 {!! Form::select('catagory', array(
    'Seafood' => 'Seafood',
    'Pasta' => 'Pasta',
    'Salad' => 'Salad',
    'Desert'=> 'Desert',
    'Drink' => 'Drink',
))!!}
 </div>
 </div>
<div class="col-md-10 col-md-offset-1">
 <div class="form-group">
 <strong>Description:</strong>
 {!! Form::text('desc', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="row">
 <div class="col-xs-6 text-right">
 <button type="submit" class="btn btn-primary">ADD MENU</button>
 </div>
 <div class="col-xs-6 text-left">
 <button type="reset" class="btn btn-warning">CANCEL</button>
 </div>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection 