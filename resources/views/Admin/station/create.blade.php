@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Create Bus Station</h3>
    <form method="post" action="{{ url('admin/busstation') }}">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name_mm">Name_MM</label>
            <input type="text" name="name_mm" class="form-control">
        </div>
        <div class="form-group">
        <label>City</label>
            <select name="city_id" class="form-control">
                <option value="0">Choose City</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-success">Create Bus Station</button>
    </form>
</div>
@endsection