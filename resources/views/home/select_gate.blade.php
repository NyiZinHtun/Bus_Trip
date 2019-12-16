@extends('layouts.master')
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
	@if(isset($message))
	<div class="alert alert-success">
		{{$message}}
	</div>
	@endif
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Gate</th>
				<th>Bus_Fee</th>
				<!-- <th>Departure Time</th> -->
				<th>Action</th>
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
			@if(isset($homes))
			@foreach($homes as $home)
			<tr>
				<td>{{$home->gate->name}}</td>
				<td>{{ $home->gate->bus_fee }}</td>
				<!-- <td> -->
					<!-- <select name="Time" class="form-control">
					<option value="0">Choose Time</option>
					@foreach($home->gate->buses as $bus)
						<option value="{{ $bus->id }}">
							{{ $bus->departure_time }}
						</option>
					@endforeach
				</select> -->
				<!-- <input type="text" name="depature_time" id="time-{{ $home->gate_id}}"> -->
				<!-- </td> -->
				<td>
					<a href="{{url('select_bus/'.$home->gate_id)}}" class="btn btn-success">Choose</a>
				</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection

<!-- @section('scripts')
<script >
var baseURL="{!! URL::to("/") !!}";
$(document).ready(function(){
	$.ajax({
		type:'GET',
		url:baseURL + '/departure_time',
		data:{},
		success:function(data){	
			// console.log(data);
				$.each(data,function(key,value){
					// console.log(key, value);				
					// console.log(value.gate_id);
					if($("#time-"+value.gate_id).length){
						setupTime(value.gate_id,value.departure_time);
					}
					// console.log(value.departure_time);
				})
		},
		error:function(XMLHTTPRequest,textStatus,errorThrow){
			alert("ERROR!!");
			alert(errorThrown);
		}
	});
	function setupTime(yourId,departureTime){
		$('#time-'+yourId).timepicker({
			// 'minTime': '4:00pm',
			// 'maxTime': '10:30pm',
			timeFormat:'h:i a'
		});
	}
});
</script>
@endsection -->