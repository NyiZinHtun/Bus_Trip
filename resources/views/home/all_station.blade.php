@extends('layouts.app')
@section('content')
<div class="container">
	<h1>@lang('message.title')</h1>
	<table class="table">
	<thead>
		<tr>
			<td>@lang('message.bs_name')</td>
			<td>@lang('message.bs_city')</td>
			<td>@lang('message.bs_action')</td>
		</tr>
	</thead>
		@foreach($busstations as $busstation)
			<tr>
				<td>{{ $busstation->name }}</td>
				<td>{{ $busstation->city->name }}</td>
				<td><a href="{{url('/select_route/'.$busstation->id)}}" class="btn btn-success">@lang('message.button')</a></td>
			</tr>
		@endforeach
	</table>
</div>
@endsection

