@extends('layouts.master')
@section('content')
    <div class="container">
    <h3>Create New City</h3 >
        <form  method="post" action="{{ url('admin/cities') }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
                @if($errors->has('name'))
                    <p>
                    {{ $errors->first('name') }}
                    </p>
                @endif
            </div>
            <div class="form-group">
                <label for="name_mm">Name_MM</label>
                <input type="text" name="name_mm" class="form-control">
                @if($errors->has('name_mm'))
                    <p class="text-danger">
                    {{ $errors->first('name_mm') }}
                    </p>
                @endif
            </div>
            <button type="submit" class="btn btn-default">Add City</button>
        </form>
    </div>
@endsection