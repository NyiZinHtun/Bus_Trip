@extends('layouts.app')
@section('content')
<div class="table-responsive">
	<form action="/search_gate" method="POST" role="search">
		{{csrf_field()}}
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="search gate">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</div>
	</form>
	<!-- @if(isset($message))
	<div class="alert alert-success">
		{{$message}}
	</div>
	@endif -->
	<table class="table table-hover">
		<thead>
			<tr>
				<th>@lang('message.gate')</th>
				<th>@lang('message.b_fee')</th>
				<th>@lang('message.action')</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($details))
			@foreach($details as $gate)
			<tr>
				<td>{{$gate->name}}</td>
				<td>{{ $gate->bus_fee }}</td>
				<td>
					<a href="{{url('select_bus/'.$gate->id)}}" class="btn btn-success">Choose</a>
				</td>
			</tr>
			@endforeach
			@endif
			@if(isset($route))
			@foreach($route->gates as $gate)
			<tr>
				<td>{{$gate->name}}</td>
				<td>{{ $gate->bus_fee }}</td>
				<td>
					<a href="{{url('select_bus/'.$gate->id)}}" class="btn btn-success">@lang('message.button')</a>
				</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection

