@extends('layouts.master')

@section('content')

    <div class="container bandb">

        @include('layouts.partials._hero',['hero' =>'weddings.jpg'])
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
        <p>If you are reading this you are probably thinking about a destination wedding....</p>

        @include('layouts.partials._wedding_enq')
    </div>

@endsection