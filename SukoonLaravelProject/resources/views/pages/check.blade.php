@extends('layouts.app')
@section('childcontent')
{!! Form::open(['action'=>'AppointConsultController@sendemail','method'=>'POST']) !!}





    <div class="form-group" style="margin-top:140px">
        {{ Form::label('name','Name') }}
        {{ Form::text('name','',['class'=>'form-control','placeholder'=>'enter qualification here']) }}
       
    </div>
    <div class="form-group" style="margin-top:140px">
        {{ Form::label('email','Email') }}
        {{ Form::text('email','',['class'=>'form-control','placeholder'=>'enter qualification here']) }}
       
    </div>
    <div class="form-group" style="margin-top:140px">
        {{ Form::label('message','Message') }}
        {{ Form::text('message','',['class'=>'form-control','placeholder'=>'enter qualification here']) }}
       
    </div>


{{ Form::submit('send',['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection