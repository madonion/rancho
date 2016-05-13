<!-- Navigation -->
<?php $thisPage =  Request::path() ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{$thisPage == '/'?'active':''}}"><a href="{{ url('/') }}">Home</a></li>
                {{--<li class="{{$thisPage == 'rooms'?'active':''}}"><a href="{{ url('rooms') }}">Rooms</a></li>--}}
                <li class="{{$thisPage == 'B&B'?'active':''}}"><a href="{{ url('B&B') }}">B&B</a></li>
                <li class="{{$thisPage == 'weddings'?'active':''}}"><a href="{{ url('weddings') }}">Weddings</a></li>
                <li class="{{$thisPage == 'bookings'?'active':''}}"><a href="{{ url('bookings') }}">bookings</a></li>
                <li class="{{$thisPage == 'contact'?'active':''}}"><a href="{{ url('contact') }}">Contact</a></li>
                <li class="{{$thisPage == 'explore'?'active':''}}"><a href="{{ url('explore') }}">Explore</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>



