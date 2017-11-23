@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2">
 <h1>Edit Account</h1>
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
 {!! Form::model($admin, ['method' => 'PATCH','route' => ['manageresers.update', $admin->id]]) !!}
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID:</strong>
 {!! Form::text('idCus',(Auth::user()->id) , ['readonly']) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Table Name:</strong>
 {!! Form::text('idTable', null, array('placeholder' => 'Table Name','class' => 'form-control')) !!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Date for Reserve:</strong>
 {!! Form::text('tgl', null, array('placeholder' => 'Format : YYYY-MM-DD','class' => 'formcontrol'))
!!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Time for Reserve:</strong>
 {!! Form::text('waktu', null, array('placeholder' => 'Format : HH:MM:mm','class' => 'formcontrol'))
!!}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </div>
 {!! Form::close() !!}
 </div>
</div>
@endsection