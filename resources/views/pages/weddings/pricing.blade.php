@extends('layouts.master')

@section('content')

	<div class="container weddings">
		<div class="weddings-container">
			<img src="/images/heroes/weddings.jpg" class="img-responsive">
			<h1>WEDDINGS</h1>
		</div>
		<div class="weddings-text">
			<p>Rancho del Inglés is the perfect place to enjoy your wedding in Spain. There are no packages or deals, only our commitment to delivering exactly what you want on your most special day.</p>
			<p>Celebrate your marriage with a blessing here at the casa or simply return here after your religious ceremony in the stunning local church, located in our local town of Alhaurín de la Torre. Then dine and dance the night away under the Andalucian stars.</p>
			<p>We can host up to 200 people (in summer). Please email or call us to request a copy of our detailed wedding information pack and, of course, to organise a chat with our general manager who will oversee your event from beginning to end.</p>

			<h2>Wedding Prices</h2>
			<ul class="dashed">
				<li>3. day (minimum) exclusive use at &euro;0000 (excl. 10% VAT).</li>
				<li>7 days exclusive use at &euro;0000 (excl. 10% VAT).</li>
			</ul>

			<p>We are now taking bookings for late 2016 and 2017.</p>
			<p>Thinking of choosing us as your Spain wedding venue?</p>

			<p><strong>Contact us</strong> to find out more about getting married at Rancho del Inglés</p>
		</div>
		@include('layouts.partials._wedding_enq')
	</div>

@endsection