@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="room">
				<img src="http://placehold.it/1200x500" class="img-responsive">
			<div class="room-image col-md-6">
				<h3 class="room-name">{{$data['name']}}</h3>
				<p class="room-description">{{$data['description']}}</p>
				<a href="{{url('/reservations/'.str_slug($data['name']))}}">calendar which will send you to the reservation</a></li>
			</div>
		</div>
	</div>

@endsection