@extends('layouts.master')
@section('content')
    <div class="container">
        <h3>Bus</h3>
        <table class="table">
            <thead>
                <tr>
                    <td>Bus_No</td>
                    <td>Gate Name</td>
                    <td>Total Seat</td>
                    <td>is_avaliable</td>
                    <td align="center">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($buses as $bus)
                    <tr>
                        <td>{{ $bus->bus_no }}</td>
                        <td>{{ $bus->gate->name }}</td>
                        <td>{{ $bus->total_seat }}</td>
                        <td>{{ $bus->is_avaliable }}</td>
                        <td><a href="{{ url('admin/bus/' .$bus->id. '/edit') }}" class="btn btn-warning">Edit</a></td>
                        <td><form method="post" action="{{ url('admin/bus/'.$bus->id) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection