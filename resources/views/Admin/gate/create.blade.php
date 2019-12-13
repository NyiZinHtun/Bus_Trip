@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Create Gate</h3>
    <form action="{{ url('admin/gate') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name_mm">Name_mm</label>
            <input type="text" name="name_mm" class="form-control">
        </div>
        <div class="form-group">
        <label>Bus Station</label>
        <select name="bus_station_id" class="form-control">
        <option value="0">Choose Bus Station</option>
            @foreach($busstations as $busstation)
                <option value="{{ $busstation->id }}">{{ $busstation->name }}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-success">Add Gate</button>
    </form>
</div>
@endsection