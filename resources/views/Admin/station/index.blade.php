@extends('layouts.master')
@section('content')
<div class="container">
    <h3>Bus Station</h3>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Name MM</td>
            <td>City Name</td>
            <td align="center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($busstations as $busstation)
            <tr>
                <td>{{ $busstation->id }}</td>
                <td>{{ $busstation->name }}</td>
                <td>{{ $busstation->name_mm }}</td>
                <td>{{ $busstation->city->name }}</td>
                <td><a href="{{ url('admin/busstation/' .$busstation->id. '/edit') }}" class="btn btn-warning">Edit</a></td>
                <td>
                <form method="post" action="{{ url('/admin/busstation/' .$busstation->id) }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</div>
@endsection