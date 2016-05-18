@extends('layouts.master')

@section('content')

	<div class="container walkthrough">
		<img src="/images/heroes/weddings.jpg" class="img-responsive">
        <h2>What does a wedding at Rancho include?</h2>

        <article class="walkthorough-step">
            <div class="col-md-6">
                <img src="http://placehold.it/600x300" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h3>Welcome drinks</h3>
                <p>Expect guests to be wowed as they enter through our impressive traditional Spanish arch and are greeted with a glass of champagne and canapes to enjoy whilst they mingle and take in the beautiful surrounding gardens.</p>
            <span class="more">[more...]</span>
            </div>
        </article>

        <article class="walkthorough-step">
            <div class="col-md-6">
                <img src="http://placehold.it/600x300" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h3>Ceremony</h3>
                <p>When the time is right, we will lead guests down the garden pathway to our separate ceremony area. Framed by woods, lush grass, beautiful blooming flowers and our very own fresh water stream. The ceremony area can be decorated according to your taste with flowers, ribbons and more, to ensure it's just how you pictured it on your special day.</p>
                <span class="more">[more...]</span>
            </div>
        </article>
        <article class="walkthorough-step">
            <div class="col-md-6">
                <img src="http://placehold.it/600x300" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h3>The Barn</h3>
                <p>After the ceremony the happy couple along with guests can head over to the wedding studio (barn) where they'll find tables, again decorated to your taste for dinner, the bar, your choice of entertainment and of course, no wedding would be complete without a spacious dance floor.</p>
                <span class="more">[more...]</span>
            </div>
        </article>
        @include('layouts.partials._wedding_enq')
    </div>

@endsection