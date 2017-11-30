@extends('layouts.masterDashboard')
@section('contenkiri')
<?php  $nama = Auth::user()->name; ?>
<div class="title">
  <h2><?php echo strtoupper($nama); ?>'s <span>Dashboard</span></h2>
</div>

<nav class="navbar navbar-light">
  <ul>
    <li>
          <a class="navbar-brand x" href="{{ url('/home') }}">Home</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('orders.index') }}">Orders</a>
      </li>
      <li>
          <a class="navbar-brand x" href="{{ route('reserves.index') }}">Reservations</a>
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
    </div>
</div>
@endsection
