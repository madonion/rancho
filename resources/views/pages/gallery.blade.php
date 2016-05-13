@extends('layouts.master')

@section('content')

<div class="container">
    <div class="cta row" role="group">
        <div class="col-md-6">
            <a href="{{ url('gallery/ceremony') }}">
                <img src="http://placehold.it/585x300" class="img-responsive" width="585" height="300">
                <span>Ceremony</span>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('gallery/coctails') }}">
                <img src="http://placehold.it/585x300" class="img-responsive" width="585" height="300">
                <span>Coctails</span>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('gallery/food-drink') }}">
                <img src="http://placehold.it/585x300" class="img-responsive" width="585" height="300">
                <span>Food & Drink</span>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('gallery/bar-dancing') }}">
                <img src="http://placehold.it/585x300" class="img-responsive" width="585" height="300">
                <span>Bar & Dancing</span>
            </a>
        </div>
    </div>
</div>

@endsection