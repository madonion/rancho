@extends('layouts.master')

@section('content')

<div class="container">
	<p>Our Rooms: all our rooms are special but they are not created equal. The following information will help you find the right room for you</p>
	<section>
		<h2>Superior Rooms</h2>
		<article>
			<div class="room-img col-md-4">
				<img src="http://placehold.it/380x200" class="img-responsive">
			</div>
			<div class="room-desc col-md-6">
				<h3>Room One</h3>
	      		<p>Sleeps: 2 - 4</p>
	      		<p>Beds:  ... </p>
	      		<p>Size:    </p>
	      	</div>
	      	<div class="room-price col-md-2">
	      		<span class="price">from &euro; 90</span>&nbsp;&nbsp;
	      		<a href="{{URL::to('rooms/room-one')}}" class="btn btn-default">Read More</a>
	      	</div>
		</article>
	</section>
</div>

@endsection