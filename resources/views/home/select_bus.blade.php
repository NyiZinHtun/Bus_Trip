@extends('layouts.master')
@section('content')
<form action="/search_bus" method="POST" role="search">
	{{csrf_field()}}
	<div class="input-group">
		<input type="text" name="q" class="form-control" placeholder="search users">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
	</div>
</form>
@if(isset($message))
<div class="alert alert-success">
	{{$message}}
</div>
@endif
<table class="table table-hover">
	<thead>
		<tr>
			<th>Bus Number</th>
			<th>Departure Time</th>
			<th>Number of Seats</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@if(isset($details))
		@foreach($details as $bus)
		<tr>
			<td>{{$bus->bus_no}}</td>
			<td>
				@if($bus->is_available==0)
				<a href="{{url('select_seat/'.$bus->id)}}" class="btn btn-success">Choose</a>
				@else
				<b class="text-danger">Over</b>
				@endif
			</td>
		</tr>
		@endforeach
		@endif

		@if(isset($gate->buses))
		@foreach($gate->buses as $bus)
		<tr>
			<td>{{$bus->bus_no}}</td>
			<td>{{ $bus->departure_time }}</td>
			<td>
			<form action="{{ url('/select_seat/'. $bus->id) }}" method="GET">
				<select name="SelectSeat" class="form-control">
				<option value="1">1</option>
      			<option value="2">2</option>
      			<option value="3">3</option>
      			<option value="4">4</option>
      			<option value="5">5</option>
				<option value="6">6</option>
				</select>
				<td>
				@if($bus->is_available==0)
				<a href="{{url('select_seat/'.$bus->id)}}"><button class="btn btn-success">Choose</button></a>
				@else
				<b class="text-danger">Over</b>
				@endif
				</td>
			</form>
			</td>
		</tr>
		@endforeach
		@endif
	</tbody>
	
</table>
@endsection