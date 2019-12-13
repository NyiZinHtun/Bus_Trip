@extends('layouts.master')
@section('content')

<!-- search seat -->
<form action="/search_seat" method="POST" role="search">
	{{csrf_field()}}
	<div class="input-group">
		<input type="text" name="q" class="form-control" placeholder="search seat">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
	</div>
</form>
<!-- end of search seat -->
@if(isset($message))
<div class="alert alert-success">
	{{$message}}
</div>
@endif
<table class="table table-hover">
	<thead>
		<tr>
			<th>Seat No</th>
			<th>Is available</th>
		</tr>
	</thead>
	<tbody>
		@if(isset($details))
		@foreach($details as $seat)
		<tr>
			<td>{{$seat->seat_no}}</td>
			<td>
				@if($seat->is_available==1)
				<a href="" class="btn btn-success">Select</a>
				@else
				<b class="text-danger">Over</b>
				@endif
			</td>
		</tr>
		@endforeach
		@endif

		@if(isset($seats))
		@foreach($seats as $seat)
		<tr>
			<td>{{$seat->seat_no}}</td>
			<td>
				@if($seat->is_available == 1)
					<a href="{{  }}" class="btn btn-success">Select</a>
				@else
					<b class="text-danger">Over</b>
				@endif
			</td>
		</tr>
		@endforeach
		@endif

	</tbody>
	
</table>
@endsection