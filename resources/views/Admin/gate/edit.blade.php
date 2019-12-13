@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Edit Gate</h3>
    <form action="{{ url('admin/gate/' . $gate->id) }}" method="post">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $gate->name }}">
        </div>
        <div class="form-group">
            <label for="name_mm">Name_mm</label>
            <input type="text" name="name_mm" class="form-control" value="{{ $gate->name_mm }}">
        </div>
        <div class="form-group">
        <label>Bus Station</label>
        <select name="bus_station_id" class="form-control">
            <option value="0">Choose BusStation</option>
            @foreach($busstations as $busstation)
                <option value="{{ $busstation->id }}" {{ $busstation->id == $gate->bus_station_id ? "selected":"" }}>
                    {{ $busstation->name }}
                </option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-success">Add Gate</button>
    </form>
</div>
@endsection