@extends('layouts.master')

@section('content')
	<div class="container">
        <p>All our rooms have as standard:  WiFi, free parking and complimentary toiletries. A continental breakfast for two is included in the room price. <a href="{{url('/rooms')}}"><strong>Check our rooms</strong></a></p>

        <h2>step 1</h2>

        <div class="date-selection-tool row">
            <div class="rooms col-md-4">
                <span>Rooms -1+</span>
            </div>
            <div class="room-details-container col-md-4">
                <span>Adults -2+</span> |
                <span>Children -2+</span>
            </div>
            <div class="nights col-md-4">
                <span>Nights -2+</span>
            </div>
        </div>
        <br>
        Calendar like on https://www.hotelcharleroiairport.be/en

        <h2>step 2</h2>

        room selection tool: at this point only show the rooms available for the desired period
        <div class="row">
            <section class="col-md-8 room-selection">
                @foreach($data as $room)
                    <article class="room">
                        <div class="room-image col-md-4">
                            <img src="http://placehold.it/300x200" class="img-responsive">
                        </div>
                        <div class="room-image col-md-6">
                            <h3 class="room-name">{{$room['name']}}</h3>
                            <p class="room-price">price: {{$room['price']}}, capacity: </p>
                            <a href="{{ $room['name'] }}">Book this room</a></li>
                        </div>
                    </article>
                @endforeach
            </section>

            <aside class="info-sidebar col-md-4">
                <strong>Your booking details</strong><br>
                Check in date: dd-mm-yyyy, Check out date dd-mm-yyyy<br>
                <strong>x rooms, y adults</strong>
            </aside>
            <div class="alert-info col-md-4">
                &nbsp;<i class="fa fa-info-circle" aria-hidden="true"></i> Select x more rooms to continue your booking.
            </div>
        </div>

        <h2>step 3</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Room</th>
                    <th>Capacity</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Room Eight</td>
                    <td>2 people</td>
                    <td>&euro; 100</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><strong>Total &euro; 100</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><strong>Upfont &euro; 100</strong></td>
                </tr>
            </thead>
        </table>
        <ul>
            <li>Last name:</li>
            <li>First name:</li>
            <li>Passport Number or NIE:</li>
            <li>Email Address:</li>
            <li>Phone Number:</li>
            <li>Mobile Number:</li>
            <li>Address:</li>
            <li>Interested in Bed & Breakfast or Self Catering:YesNo</li>
            <li>Your note:</li>
        </ul>

        <h2>step 4</h2>
            optional upfront payment process
    </div>

@endsection