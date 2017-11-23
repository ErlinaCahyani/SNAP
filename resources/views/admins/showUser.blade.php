@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2">
 <h1>Account Detail</h1>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>ID Customer:</strong>
 {{ $admin->id }}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>Name:</strong>
 {{ $admin->name }}
 </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>email:</strong>
 {{ $admin->email }}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection