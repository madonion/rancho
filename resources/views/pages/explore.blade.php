@extends('layouts.master')

@section('content')

	<div class="container bandb">
		<img src="images/heroes/bb_h.jpg" class="img-responsive">
		<div class="row">
            <div class="row">
                <div class="col-md-7 col-xs-6 no-gutters-left">
                    <a href="<?= url('weddings/walkthrough')?>" >
                        <div class="ib ib-walkthrough">
                            <div class="overlay">
                                <span>walkthrough</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 col-xs-6 no-gutters-right">
                    <a href="<?= url('/weddings/cocktails')?>" >
                        <div class="ib ib-cocktails">
                            <div class="overlay">
                                <span>cocktails</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 col-xs-6 no-gutters-left">
                    <a href="<?= url('/weddings/pricing')?>" >
                        <div class="ib ib-pricing">
                            <div class="overlay">
                                <span>Pricing</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-7  col-xs-6 no-gutters-right">
                    <a href="<?= url('/weddings/food-and-drink')?>" >
                        <div class="ib ib-food-and-drink">
                            <div class="overlay">
                                <span>Food & Drink</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
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