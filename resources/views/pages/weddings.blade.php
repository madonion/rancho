@extends('layouts.master')

@section('content')

    <div class="container bandb">
        <img src="/images/heroes/weddings.jpg" class="img-responsive">
        <div class="row">
            <div class="col-md-6 no-gutters-left">
                <div class="image-placeholder" style="height: 200px"><a href="<?=url('weddings/walkthrough')?>" >Walkthrough</a></div>
            </div>
            <div class="col-md-6 no-gutters-right">
                <div class="image-placeholder" style="height: 200px"><a href="<?=url('/weddings/cocktails')?>" >Cocktails</a></div>
            </div>
            <div class="col-md-6 no-gutters-left">
                <div class="image-placeholder" style="height: 200px"><a href="<?=url('/weddings/pricing')?>">Pricing</a></div>
            </div>
            <div class="col-md-6 no-gutters-right">
                <div class="image-placeholder" style="height: 200px"><a href="<?=url('/weddings/food-and-drink')?>" >Food & Drink</a></div>
            </div>
        </div>
        <p>If you are reading this you are probably thinking about a destination wedding....</p>

        @include('layouts.partials._wedding_enq')
    </div>

@endsection