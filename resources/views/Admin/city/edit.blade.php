@extends('layouts.master')
@section('content')
    <div class="container">
    <h3>UpdateCity</h3 >
        <form  method="post" action="{{ url('admin/cities/'. $city->id ) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $city->name }}">
            </div>
            <div class="form-group">
                <label for="name_mm">Name_MM</label>
                <input type="text" name="name_mm" class="form-control" value="{{ $city->name_mm }}">
            </div>
            <button type="submit" class="btn btn-default">Update City</button>
        </form>
    </div>
@endsection