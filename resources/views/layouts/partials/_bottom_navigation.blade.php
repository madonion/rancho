<!-- Navigation -->
<?php $thisPage =  Request::path() ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-footer-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-footer-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{$thisPage == 'about'?'active':''}}"><a href="{{ url('about') }}">About</a></li>
                <li class="{{$thisPage == 'press-reviews'?'active':''}}"><a href="{{ url('press-reviews') }}">Reviews</a></li>
                <li class="{{$thisPage == 'weddings'?'active':''}}"><a href="{{ url('weddings') }}">Terms & Conditions</a></li>
                <li class="{{$thisPage == 'location'?'active':''}}"><a href="{{ url('location') }}">Location</a></li>
                <li class="{{$thisPage == 'sitemap'?'active':''}}"><a href="{{ url('sitemap') }}">Sitemap</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container">
    <hr class="footer"/>
</div>
