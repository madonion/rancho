@extends('layouts.master')

@section('content')

<div class="container bandb">
	<img src="images/heroes/bb_h.jpg" class="img-responsive">
	<div class="row">
		<div class="col-md-6 no-gutters-left">
			<div class="image-placeholder" style="height: 200px"><a href="<?= url('/rooms')?>" >interiors</a></div>
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
</div>

@endsection