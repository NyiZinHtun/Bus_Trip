@extends('layouts.master')
@section('content')
<div class="container">
<h3>Gate List</h3>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Name MM</td>
            <td>Bus Station</td>
            <td align="center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($gates as $gate)
            <tr>
            <td>{{ $gate->id }}</td>
            <td>{{ $gate->name }}</td>
            <td>{{ $gate->name_mm }}</td>
            <td>{{$gate->bus_station->name}}</td>
            <td><a href="{{ url('admin/gate/'. $gate->id .'/edit') }}" class="btn btn-success">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection