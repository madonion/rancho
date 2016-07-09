@extends('layouts.master')

@section('content')

<div class="container bandb">
	@include('layouts.partials._hero',['hero' =>'bb_h.jpg'])
	<div class="row">
		<div class="col-md-6 no-gutters-left">
			<div class="image-placeholder" style="height: 200px"><a href="<?= url('accommodations')?>" >interiors</a></div>
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