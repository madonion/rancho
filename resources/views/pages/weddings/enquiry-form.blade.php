@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="col-md-5">
            <h1>Wedding Enquiries</h1>
        </div>
        <div class="col-md-5">
            <h3>Reservation Enquiries</h3>
        </div>
        <div class="col-md-7">
            {{Form::open() }}

            {{Form::label('Name', 'Name')}}
            {{Form::text('name')}}
            <br>
            {{Form::label('Email', 'Email')}}
            {{Form::text('email')}}
            <br>
            {{Form::label('subject', 'Subject')}}
            {{Form::text('subject','Wedding enquiry')}}
            <br>
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message')}}
            <br>
            {{Form::label('date', 'When do you want to celebrate your wedding')}}
            {{Form::date('date', \Carbon\Carbon::now()->addDays(2))}}
            <br>
            {{Form::label('flexibility', 'Do you have flexibility with your dates?')}}
            Yes
            {{Form::radio('flex','yes')}}
            No
            {{Form::radio('flex','no')}}
            <br>
            {{Form::label('guests', 'Approximately how many guests do you anticipate?')}}
            {{Form::text('guests')}}
            {{Form::submit('Send')}}
            {{ Form::close() }}
        </div>
    </div>


@endsection