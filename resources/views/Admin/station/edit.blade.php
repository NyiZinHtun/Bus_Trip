@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Edit Bus Station</h3>
    <form method="post" action="{{ url('admin/busstation/' .$busstation->id) }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}   
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $busstation->name }}">
        </div>
        <div class="form-group">
            <label for="name_mm">Name_MM</label>
            <input type="text" name="name_mm" class="form-control" value="{{ $busstation->name_mm }}">
        </div> 
        <div class="form-group">
            <label>City</label>
            <select name="city_id" class="form-control">
                <option value="0">Choose City</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}" {{ $city->id == $busstation->city_id ? "selected":"" }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update Bus Station</button>
    </form>
</div>

@endsection