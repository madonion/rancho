@extends('layouts.master')

@section('content')

<div class="container">
	<h1>room one</h1>
	<div class="col-md-6">
		<img src="http://placehold.it/720x380?text=Room+One" class="img-responsive">
		<ul class="room-icons">
			<li><img src="http://placehold.it/70x50"></li>
			<li><img src="http://placehold.it/70x50"></li>
			<li><img src="http://placehold.it/70x50"></li>
		</ul>
		<ul>
			<li>Sleeps: 2 - 4</li>
			<li>Beds: 1 King</li>
		</ul>
		
		<h2>More info</h2>
		<p>The largest of the rooms in the original farmhouse which stood over 100 years ago. Thick walls, a fireplace and high ceiling retain the spirit of those days, while the new décor is contemporary and fresh. The best choice if you have small children as there is a sofa bed. 
NB. Room rates and breakfast are based on two people sharing. There is an extra €20 per extra person, per night, to cover breakfast and occupation. </p>
		<h2>Amenities</h2>
		<ul>
			<li><i class="fa fa-wifi"></i> Wifi</li>
			<li><i class="fa fa-bed"></i> Sofa bed</li>
			<li><i class="fa fa-bed"></i> Twin basins</li>
			<li><i class="fa fa-key"></i> Independent access</li>
		</ul>
	</div>
	<div class="col-md-4 col-md-offset-1 price-box">
		<h3>from &euro; 90 per night</h3>
		{{ Form::open(array('url' => 'bookings')) }}
		 {{Form::label('cin_date', 'CheckIn Date')}}
		 {{Form::date('checkInDate', \Carbon\Carbon::now())}}<br>
		 {{Form::label('cout_date', 'CheckOut Date')}}
		 {{Form::date('checkOutDate', \Carbon\Carbon::now()->addDays(2))}}
		 <br>
		 {{Form::submit('Book Now')}}
    
		{{ Form::close() }}
		^^This will stay in sight like on wix^^
	</div>
</div>

@endsection