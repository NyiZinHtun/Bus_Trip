@extends('layouts.master')
@section('content')
<div class="container">
<h3>Update Bus</h3 >
        <form  method="post" action="{{ url('admin/bus/'. $bus->id ) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
            <div class="form-group">
                <label for="bus_no">Bus_NO</label>
                <input type="text" name="bus_no" class="form-control" value="{{ $bus->bus_no }}">
            </div>
            <div class="form-group">
                <label>Gate Name</label>
                <select name="gate_id" class="form-control">
                    <option value="0">Choose Gate</option>
                    @foreach($gates as $gate)
                        <option value="{{ $gate->id }}" {{ $gate->id == $bus->gate->id ? "selected":"" }}>
                        {{ $gate->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="from-group">
            <label>Total_Seat</label>
                <select name="total_seat" class="form-control">
                    <option value="0">Choose Seat</option>
                    <option value="1" {{ $bus->total_seat == 1 ? "selected":""}}>1</option>
                    <option value="2" {{ $bus->total_seat == 2 ? "selected":""}}>2</option>
                    <option value="3" {{ $bus->total_seat == 3 ? "selected":""}}>3</option>
                    <option value="4" {{ $bus->total_seat == 4 ? "selected":""}}>4</option>
                    <option value="5" {{ $bus->total_seat == 5 ? "selected":""}}>5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Update Bus</button>
        </form>
</div>
@endsection