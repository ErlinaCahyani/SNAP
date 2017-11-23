@extends('layouts.masterDashboard')
@section('content')
<div class="section">
@if (count($admin))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$cari}}</b></div>
    @foreach($admin as $data)
    <div class="row">
		
			<h5>{{ $data->name }}</h5>
            <h5>{{ $data->price }}</h5>
             <a class="btn btn-info" href="{{ route('manageorders.show',$data->id) }}">Detail</a>
            </iv>
        
		</div>
	</div>
	@endforeach

</div>

{{ $admin->render() }}
	
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$cari}}</b> Tidak Ditemukan</div>
@endif
@endsection