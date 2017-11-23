@extends('layouts.masterDashboard')
@section('contenkiri')
<?php  $nama = Auth::user()->name; ?>
<div class="title">
  <h2><?php echo strtoupper($nama); ?>'s <span>Dashboard</span></h2>
</div>
<!-- As a link -->
<nav class="navbar navbar-light">
  <ul>
      <li>
          <a class="navbar-brand biru" href="#">Admin Home</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('managemenus.index') }}">Manage Menus</a>
      </li>
      <li>
          <a class="navbar-brand x" href="#">Manage Specials</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageorders.index') }}">Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageordertotals.index') }}">Customer Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageresers.index') }}">Reservations</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('manageusers.index') }}">Manage Customer</a>
      </li>
  </ul>
</nav>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
           <div class="title"><h2><span>Home</span></h2></div>
           <div style="width: 10%;height: 2px;" class="maroon"></div>
                </br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
        </div>
    </div>
</div>
@endsection