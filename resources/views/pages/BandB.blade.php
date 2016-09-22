@extends('layouts.master')

@section('content')

<div class="container bandb">
	@include('layouts.partials._hero',['hero' =>'bb_h.jpg'])
	<div class="row">
		<div class="col-sm-7 col-xs-7 no-gutters-left">
            <a href="<?= url('accommodations')?>" >
                <div class="ib ib-accommodation">
                    <div class="overlay">
                        <span>interiors</span>
                    </div>
                </div>
            </a>
		</div>
		<div class="col-md-5 col-xs-5 no-gutters-right">
            <a href="<?= url('gallery/gardens')?>" >
                <div class="ib ib-gardens">
                    <div class="overlay">
                        <span>gardens</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-5 col-xs-5 no-gutters-left">
            <a href="gallery/amenities" >
                <div class="ib ib-amenities">
                    <div class="overlay">
                        <span>amenities</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-7  col-xs-7 no-gutters-right">
            <a href="gallery/" >
                <div class="ib ib-where-to-visit">
                    <div class="overlay">
                        <span>where to visit</span>
                    </div>
                </div>
            </a>
        </div>
	</div>
</div>

@endsection