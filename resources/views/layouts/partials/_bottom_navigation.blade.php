<!-- Navigation -->
<?php $thisPage =  Request::path() ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="{{$thisPage == 'about'?'active':''}}"><a href="{{ url('about') }}">About</a></li>
            <li class="{{$thisPage == 'press-reviews'?'active':''}}"><a href="{{ url('press-reviews') }}">Reviews</a></li>
            <li class="{{$thisPage == 'weddings'?'active':''}}"><a href="{{ url('weddings') }}">Terms & Conditions</a></li>
            <li class="{{$thisPage == 'location'?'active':''}}"><a href="{{ url('location') }}">Location</a></li>
            <li class="{{$thisPage == 'sitemap'?'active':''}}"><a href="{{ url('sitemap') }}">Sitemap</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->

</nav>
<div class="container">
    <hr class="footer"/>
</div>
