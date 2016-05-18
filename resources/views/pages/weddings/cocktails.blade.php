@extends('layouts.master')

@section('content')

	<div class="container weddings">
		<div class="weddings-container">
			<img src="/images/heroes/weddings.jpg" class="img-responsive">
			<h1>WEDDINGS</h1>
		</div>
		<div class="weddings-text">
			<h1>cocktails</h1>
		</div>
        @include('layouts.partials._wedding_enq')
	</div>

@endsection