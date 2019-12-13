@extends('layouts.master')
@section('content')
<div class="container">
	<h1>Welcome Bus_Station</h1>
	<table class="table">
	<thead>
		<tr>
			<td>Busstation Name</td>
			<td>City Name</td>
			<td>Action</td>
		</tr>
	</thead>
		@foreach($busstations as $busstation)
			<tr>
				<td>{{ $busstation->name }}</td>
				<td>{{ $busstation->city->name }}</td>
				<td><a href="{{url('/select_route/'.$busstation->id)}}" class="btn btn-success">Choose</a></td>
			</tr>
		@endforeach
	</table>
</div>
@endsection

