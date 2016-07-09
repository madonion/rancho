@extends('layouts.master')

@section('content')
	<?php dd($data[0])?>
	<div class="container">
		<div class="room">
				<img src="http://placehold.it/1200x500" class="img-responsive">
			<div class="room-image col-md-6">
				<h3 class="room-name">{{$data}}</h3>
				<p class="room-description"></p>
				<a href="">calendar which will send you to the reservation</a></li>
			</div>
		</div>
	</div>

@endsection