@extends('layouts.master')
@section('content')
<div class="table-responsive">
	<form action="/search_route" method="POST" role="search">
		{{csrf_field()}}
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="search route">
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
		<tr>
			<th>Route Name</th>
			<th>From</th>
			<th>To</th>
			<th>Action</th>
		</tr>
		<tbody>
			@if(isset($details))
			@foreach($details as $route)
			<tr>
				<td>{{$route->route_name}}</td>
				<td>{{$route->from_city->name}}</td>
				<td>{{$route->to_city->name}}</td>
				<td>
					<a href="{{url('select_gate/'.$route->id)}}" class="btn btn-success">Choose</a>
				</td>
			</tr>
			@endforeach
			@endif
			@if(isset($routes))
			@foreach($routes as $route)				
			<tr>	
				<td>{{$route->route_name}}</td>
				<td>{{$route->from_city->name}}</td>
				<td>{{$route->to_city->name}}</td>
				<td><a href="{{url('select_gate/'.$route->id)}}" class="btn btn-success">Choose</a></td>		
			</tr>
			@endforeach	
			@endif
		</tbody>
	</table>
</div>
@endsection