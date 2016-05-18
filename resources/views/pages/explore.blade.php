@extends('layouts.master')

@section('content')

	<div class="container bandb">
		<img src="images/heroes/bb_h.jpg" class="img-responsive">
		<div class="row">
			<div class="col-md-6 no-gutters-left">
				<div class="image-placeholder" style="height: 200px"><a href="gallery/interiors" >gallery 1</a></div>
			</div>
			<div class="col-md-6 no-gutters-right">
				<div class="image-placeholder" style="height: 200px"><a href="gallery/gardens" >gallery 2</a></div>
			</div>
			<div class="col-md-6 no-gutters-left">
				<div class="image-placeholder" style="height: 200px"><a href="gallery/amenities" >gallery 3</a></div>
			</div>
			<div class="col-md-6 no-gutters-right">
				<div class="image-placeholder" style="height: 200px"><a href="gallery/where-to-visit" >gallery 4</a></div>
			</div>
		</div>
	</div>

@endsection