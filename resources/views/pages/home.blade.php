@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-6 img-link">
            <a href="{{ url('B&amp;B') }}">
                <img src="images/heroes/homepage-interior.jpg" class="img-responsive">
                <div class="overlay">
                    <span>B&amp;B</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 img-link">
            <a href="{{ url('weddings/info') }}">
                <img src="images/heroes/homepage-exterior.jpg" class="img-responsive">
                <div class="overlay">
                    <span>WEDDINGS</span>
                </div>
            </a>
        </div>
    </div>




	<p class="description">
		Located in the countryside, Rancho del Inglés offers simple but stylish accommodation near Malaga airport in Andalucia, Spain.  An oasis of calm, it is secluded, but not isolated.  Accommodation can be booked on either a Bed & Breakfast basis or the whole property can be booked exclusively on a self-catering basis.
	</p>
</div>


@endsection