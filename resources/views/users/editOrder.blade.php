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
 	<a href="{{ route('orders.index') }}"><button class="btn btn-warning">CANCEL ORDER</button></a>
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
 {!! Form::model($admin, ['method' => 'PATCH','route' => ['ordermenus.update', $admin->id]]) !!}
 <div class="row">

 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID Order:</strong>
</br>
<!--{!! Form::text('idOrder',(Auth::user()->id.date("Ymd")) , ['readonly']) !!}
{!! Form::text('idCus',(Auth::user()->id) , ['readonly']) !!}-->
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
 <div class="col-xs-6 col-sm-6 col-md-6 text-center">
 <button type="submit" class="btn btn-primary">ADD ORDER</button>
 </div>
 </div>
 {!! Form::close() !!}</br>
 </div>
 </div>
</div>
@endsection 