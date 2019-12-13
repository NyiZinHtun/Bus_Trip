@extends('layouts.master')
@section('content')
<div class="container">
<h3>All Cities</h3>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Name MM</td>
            <td align="center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
            <tr>
            <td>{{ $city->id }}</td>
            <td>{{ $city->name }}</td>
            <td>{{ $city->name_mm }}</td>
            <td><a href="{{ url('admin/cities/' .$city->id. '/edit') }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form method="post" action="{{ url('admin/cities/'.$city->id) }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $cities->links() }}
</div>
@endsection