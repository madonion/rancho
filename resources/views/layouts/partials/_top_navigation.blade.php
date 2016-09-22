<!-- Navigation -->
<?php $thisPage =  Request::path() ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar" id="">
            <ul class="nav navbar-nav">
                <li class="{{$thisPage == '/'?'active':''}}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{$thisPage == 'B&B'?'active':''}}"><a href="{{ url('B&B') }}">B&B</a></li>
                <li class="{{$thisPage == 'weddings'?'active':''}}"><a href="{{ url('/weddings') }}">Weddings</a></li>
                <li class="{{$thisPage == 'bookings'?'active':''}}"><a href="{{ url('/reservations') }}">Bookings</a></li>
                <li class="{{$thisPage == 'contact'?'active':''}}"><a href="{{ url('/contact') }}">Contact</a></li>
                <li class="{{$thisPage == 'explore'?'active':''}}"><a href="{{ url('/explore') }}">Explore</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>



