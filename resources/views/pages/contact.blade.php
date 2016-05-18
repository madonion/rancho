@extends('layouts.master')

@section('content')

<div class="container contact">
    <div class="row">
        <div class="col-md-6">
            <h3 class="contact-heading">CONTACT</h3>
            <ul>
                <li>Tel. +34 952 410 692</li>
                <li>Mob. +34 699 414 540</li>
                <li>Mob. +34 699 414 544</li>
                <li>info@ranchodelingles.com</li>
            </ul>
            <div class="map">
                <img src="http://placehold.it/350x200?text=Static+Map">
            </div>
        </div>
        <div class="col-md-6">
            {{Form::open() }}
            <div class="form-group">
                {{Form::label('Name', 'Name')}}
                {{Form::text('name',null,['class'=>'form-control'])}}</div>
            <br>
            <div class="form-group">
                {{Form::label('Email', 'Email')}}
                {{Form::text('email',null,['class'=>'form-control'])}}</div>
            <br>
            <div class="form-group">
                {{Form::label('subject', 'Subject')}}
                {{Form::text('subject',null,['class'=>'form-control'])}}</div>
            <br>
            <div class="form-group">
                {{Form::label('message', 'Message')}}
                {{Form::textarea('message',null,['class'=>'form-control'])}}</div>
            <br>
            {{Form::submit('SEND',['class'=>'btn btn-send btn-primary form-control'])}}
            {{ Form::close() }}
        </div>
    </div>
</div>


@endsection