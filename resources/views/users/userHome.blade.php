@extends('layouts.masterDashboard')

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
                    ini yang betul You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
