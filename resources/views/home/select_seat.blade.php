@extends('layouts.master')
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
					<div class="panel-heading text-my">Select Seat</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-offset-2 col-md-8">
									<div class="driver-seat">Driver</div>
									<table class="table table-seat-plan">
										<tbody>
										<tr>
											<td><a class="seat seat-available" href=""><span>1</span></a></td>
											<td><a class="seat seat-available" href=""><span>2</span></a></td>
											<td><span class="aisle"></span></td>
											<td><a class="seat seat-available" href=""><span>3</span></a></td>
											<td><a class="seat seat-available" href=""><span>4</span></a></td>
										</tr>
										<tr>
											<td><a class="seat seat-available" href=""><span>5</span></a></td>
											<td><a class="seat seat-available" href=""><span>6</span></a></td>
											<td><span class="aisle"></span></td>
											<td><a class="seat seat-available" href=""><span>7</span></a></td>
											<td><a class="seat seat-available" href=""><span>8</span></a></td>
										</tr>
										<tr>
											<td><a class="seat seat-available" href=""><span>9</span></a></td>
											<td><a class="seat seat-available" href=""><span>10</span></a></td>
											<td><span class="aisle"></span></td>
											<td><a class="seat seat-available" href=""><span>11</span></a></td>
											<td><a class="seat seat-available" href=""><span>12</span></a></td>
										</tr>
										<tr>
											<td><a class="seat seat-available" href=""><span>13</span></a></td>
											<td><a class="seat seat-available" href=""><span>14</span></a></td>
											<td><span class="aisle"></span></td>
											<td><a class="seat seat-available" href=""><span>15</span></a></td>
											<td><a class="seat seat-available" href=""><span>16</span></a></td>
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
									{{ $home->route->route_name }}
								</td>
							</tr>
							<tr>
								<th class="col-4">Gate_Name</th>
								<th class="col-8">{{ $home->gate->name }}</th>
							</tr>
							<tr>
								<th class="col-4">Total Seat</th>
								<th class="col-8">{{ $bus->number_of_seats }}</th>
							</tr>
							<tr>
								<th class="col-4">Departure Time</th>
								<th class="col-8">{{ $bus->departure_time }}</th>
							</tr>
							<tr>
								<th class="col-4">Bus_Fee</th>
								<th class="col-8">
								<?php 
									$string = (int)$home->gate->bus_fee;
									$integer = $bus->number_of_seats;
									$integer = $string * $integer;							
								?> 
								{{ $integer }} MMK</th>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</div>
</div>
	<!-- <tbody>
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
					<a href="" class="btn btn-success">Select</a>
				@else
					<b class="text-danger">Over</b>
				@endif
			</td>
		</tr>
		@endforeach
		@endif

	</tbody> -->
@endsection