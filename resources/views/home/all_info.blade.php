@extends('layouts.master')
@section('content')
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div id="seat_count"  class="panel-heading text-my">Enter Traveller Information</div>
						<div class="panel-body">
							<div class="row">
                                <div class="panel-body">
                                    <form action="{{ url('storecusInfo/'.$home->id) }}" method="GET">
                                        <div class="form-group">
                                            <label for="name">Traveller Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control"> 
                                                <option>--Select Gender--</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nrc">NRC_NO</label>
                                            <input type="text" name="nrc" class="form-control text-my">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone_No</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        <button class="btn btn-success form-control">Submit</button>
                                    </form>
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
								<th class="col-4">Bus_Name</th>
								<th class="col-8">{{ $home->gate->name }}</th>
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
                            <tr>
                                <th class="col-4">Seat Number</th>
                                <th class="col-8">{{ $home->seatNo }}</th>
                            </tr>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</div>
</div>
@endsection