<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 6/29/16
 * Time: 3:43 PM
 */

        //dd($room->name);?>

<article class="room row">
    <div class="room-image col-md-6">
        <img src="/images/rooms/{{$room->slug}}/1.jpg" class="img-responsive">
    </div>
    <div class="col-md-6">
        <h3 class="room-name">{{$room->name}}</h3>
        <p class="room-description">{{$room->description}}</p>
        <a href="{{ url($room->slug) }}">More</a><br>
        <a href="{{ url('reservations/'.str_slug($room->name,'-')) }}">calendar which send you to the reservation</a>
    </div>
</article>
