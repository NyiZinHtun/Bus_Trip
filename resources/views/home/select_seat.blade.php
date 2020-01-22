@extends('layouts.app')
@section('content')

<!-- search seat -->
<!-- <form action="/search_seat" method="POST" role="search">
	{{csrf_field()}}
	<div class="input-group">
		<input type="text" name="q" class="form-control" placeholder="search seat">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
	</div>
</form> -->
<!-- end of search seat -->
<!-- @if(isset($message))
<div class="alert alert-success">
	{{$message}}
</div>
@endif -->

<div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div id="seat_count" data-seat-count="{{ $bus->number_of_seats }}" class="panel-heading text-my">Select ({{ $bus->number_of_seats }}) Seat</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-offset-2 col-md-8">
									<div class="driver-seat">Driver</div>
									<table class="table table-seat-plan">
									<tbody>	
									@if($home->seat() == true)
										<tr>						
										<td><button class="seat seat-available" value="1">1</button></td>
										<td><button class="seat seat-available" value="2">2</button></td>
										<td><span class="aisle"></span></td>
										<td><button class="seat seat-available" value="3">3</button></td>
										<td><button class="seat seat-available" value="4" id="button">over</button></td>
										</tr>
										@else
										<tr>						
											<td><button class="seat seat-available" value="1">1</button></td>
											<td><button class="seat seat-available" value="2">2</button></td>
											<td><span class="aisle"></span></td>
											<td><button class="seat seat-available" value="3">3</button></td>
											<td><button class="seat seat-available" value="4">4</button></td>
										</tr>
										@endif
										<tr>
											<td><button class="seat seat-available" value="5">5</button></td>
											<td><button class="seat seat-available" value="6">6</button></td>
											<td><span class="aisle"></span></td>
											<td><button class="seat seat-available" value="7">7</button></td>
											<td><button class="seat seat-available" value="8">8</button></td>
										</tr>
										<tr>
											<td><button class="seat seat-available" id="jQueryColorChange" value="9">9</button></td>
											<td><button class="seat seat-available" id="jQueryColorChange" value="10">10</button></td>
											<td><span class="aisle"></span></td>
											<td><button class="seat seat-available" id="jQueryColorChange" value="11">11</button></td>
											<td><button class="seat seat-available" id="jQueryColorChange" value="12">12</button></td>
										</tr>
										<tr>
											<td><button class="seat seat-available" id="jQueryColorChange" value="13">13</button></td>
											<td><button class="seat seat-available" id="jQueryColorChange" value="14">14</button></td>
											<td><span class="aisle"></span></td>
											<td><button class="seat seat-available" id="jQueryColorChange" value="15">15</button></td>
											<td><button class="seat seat-available" id="jQueryColorChange" value="16">16</button></td>										
										</tr>									
									</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading text-my">
						Trip Information
					</div>
					<table class="table table-seat-plan">
						<tbody>
							<tr>
								<td class="col-4">Route_Name</td>
								<td class="col-8">						
									{{ $bus->gate->route->route_name }}
								</td>
							</tr>
							<tr>
								<th class="col-4">Bus_Name</th>
								<th class="col-8">{{ $bus->gate->name }}</th>
							</tr>
							<tr>
								<th class="col-4">Departure Time</th>
								<th class="col-8">{{ $bus->departure_time }}</th>
							</tr>
							<tr>
								<th class="col-4">Bus_Fee</th>
								<th class="col-8">
								<?php 
									$string = (int)$bus->gate->bus_fee;
									$integer = $bus->number_of_seats;
									$integer = $string * $integer;							
									?> 
										{{ $integer }} MMK</th>
								</th>								
							</tr>
						</tbody>
					</table>
					<hr>
					<h3  class="text-my text-muted text-center">Please Select {{ $bus->number_of_seats }} Seat </h3>
					<h1 id="numbers" class="text-primary text-center"></h1>
					<form action="{{ url('customer_info/'.$bus->id) }}" method="GET">
						{{ csrf_field() }}
						<input type="hidden" class="form-control" name="route_id" value="{{ $bus->gate->route->id }}">
						<input type="hidden" class="form-control" name="gate_id" value="{{ $bus->gate->id }}">
						<input type="hidden" class="form-control" name="bus_id" value="{{ $bus->id }}">
						<input type="hidden" class="form-control" name ="seatNo" id="seats">
						<button class="btn btn-success btn-lg btn-block">
							<span class="my-span">Continue To Traveller Info</span>
						</button>
					</form>
				</div>	
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<script>
		let selectedSeats = [];

		$(function(){
			$('button.seat').click(function(){
				const seatCount = $('#seat_count').data('seat-count');
				var value = $(this).val();
				if (selectedSeats.includes(value)) {
					const index = selectedSeats.indexOf(value);
					selectedSeats.splice(index, 1);
					$(this).toggleClass( "selected" );
				} else {
					if (selectedSeats.length < seatCount) {
						$(this).toggleClass( "selected" );
						selectedSeats.push(value);
					}
				}
				$('#numbers').html(selectedSeats.join(', '));
				$('#seats').val(selectedSeats);
			});
		});

		document.getElementById('button').disabled = true;
	// $(function(){
	// 	$('button').bind('click', function() {
    //            var value =  $(this).unbind().val();
	// 			console.log(value);
	// });
	</script>
@endsection
