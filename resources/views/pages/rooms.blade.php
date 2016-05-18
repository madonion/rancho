@extends('layouts.master')

@section('content')
	<div class="container">
{{--        <div class="container bandb">
            <img src="images/heroes/bb_h.jpg" class="img-responsive">
            <div class="row">
                <div class="col-md-6 no-gutters-left">
                    <div class="image-placeholder" style="height: 200px"><a href="gallery/interiors" >interiors</a></div>
                </div>
                <div class="col-md-6 no-gutters-right">
                    <div class="image-placeholder" style="height: 200px"><a href="gallery/gardens" >gardens</a></div>
                </div>
                <div class="col-md-6 no-gutters-left">
                    <div class="image-placeholder" style="height: 200px"><a href="gallery/amenities" >amenities</a></div>
                </div>
                <div class="col-md-6 no-gutters-right">
                    <div class="image-placeholder" style="height: 200px"><a href="gallery/where-to-visit" >where to visit</a></div>
                </div>
            </div>
        </div>--}}
        <br><br>
		<p>All our rooms have as standard:  WiFi, free parking and complimentary toiletries. A continental breakfast for two is included in the room price.</p>
		@foreach($data as $room)
			<article class="room row">
				<div class="room-image col-md-6">
					<img src="http://placehold.it/600x300" class="img-responsive">
				</div>
				<div class="room-image col-md-6">
					<h3 class="room-name">{{$room['name']}}</h3>
					<p class="room-description">{{$room['description']}}</p>
					<a href="{{ url($room['url']) }}">More</a><br>
					<a href="{{ url('reservations/'.str_slug($room['name'],'-')) }}">calendar which send you to the reservation</a>
				</div>
			</article>

		@endforeach
	</div>

@endsection