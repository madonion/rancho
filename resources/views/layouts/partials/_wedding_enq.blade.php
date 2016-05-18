<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 18.05.2016
 * Time: 14:09
 */?>

<div class="wedding-enq col-md-10 col-md-offset-1">
    {{Form::open() }}
    <div class="form-group">
    {{Form::label('Name', 'Name')}}
    {{Form::text('name',null,['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::label('Email', 'Email')}}
    {{Form::text('email',null,['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::label('subject', 'Subject')}}
    {{Form::text('subject','Wedding enquiry',['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::label('message', 'Message')}}
    {{Form::textarea('message',null,['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::label('date', 'When do you want to celebrate your wedding')}}
    {{Form::date('date',null,['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::label('flexibility', 'Do you have flexibility with your dates?')}}
    Yes
    {{Form::radio('flex','yes',['class'=>'form-control'])}}
    No
    {{Form::radio('flex','no',['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::label('guests', 'Approximately how many guests do you anticipate?',null,['class'=>'form-control'])}}
    {{Form::text('guests',null,['class'=>'form-control'])}}</div>
    <div class="form-group">
    {{Form::submit('Send',null,['class'=>'form-control'])}}</div>
    {{ Form::close() }}
</div>
