@extends('layouts.master')

@section('content')

<div class="container">
	<h1>bookings</h1>
	{{Request::input('checkInDate')}}
	{{Request::input('checkOutDate')}}
</div>

@endsection