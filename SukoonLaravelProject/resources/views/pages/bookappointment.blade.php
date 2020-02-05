@extends('layouts.app')
@section('childcontent')
<div class="container" style="margin-top:150px">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="#">{{$doctor->name}}</li>
        <li class="active">Book Appointment</li>
    </ol>
    @include('pages.doctordetailitem',['activepage'=>'bookappoint'])

    <div class="bg-white" style="padding:20px;margin-bottom:10px;margin-top:-10px">
        <header style="color:navy;font-size:17px;font-weight:bold">Available Contact Number</header>

        <span style="color:black">{{$doctor->contact_1}}</span>
        <br>
        <span style="color:black">{{$doctor->contact_2}}</span>

    </div>

    @if (count($hospitalsclinic_detail)>0)
    @foreach ($hospitalsclinic_detail as $hospital)
    <div class="row bg-white"
        style="padding-top:20px;padding-bottom:20px;margin-left:0.04%;margin-right:0.04%;margin-bottom:10px">
        <header style="color:navy;font-size:17px;font-weight:bold;margin-bottom:10px;padding-left:20px">Book appointment
            in {{$hospital->name}}</header>
        {!! Form::open(['action'=>['AllDoctorsController@storeappointment',$hospital->id],'method'=>'POST']) !!}

        <div class='col-sm-6'>
            <div class="form-group">
                {{-- <label for="">Select Date</label> --}}
                {{-- <input type='date' class="form-control" /> --}}
                {{ Form::label('Select Date') }}
                {{ Form::date('appointmentdate','',['class'=>"form-control"]) }}
            </div>
        </div>
        <div class='col-sm-6'>
            <div class="form-group">
                {{-- <label for="">Select Time</label>
                <input type='time' class="form-control" /> --}}
                {{ Form::label('Select Time') }}
                {{ Form::time('time','',['class'=>"form-control"]) }}
            </div>
        </div>
        {{-- {{ Form::text('date', '', array('id' => 'datepicker')) }} --}}
        <div class="col-sm-6">
            <div class="form-group">
                {{-- <label for="">Phone Number</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small> --}}
                {{ Form::label('Phone Number') }}
                {{ Form::text('contact','',['class'=>"form-control"]) }}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {{-- <label for="">Patient name</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small> --}}
                {{ Form::label('Patient name') }}
                {{ Form::text('patientname','',['class'=>"form-control"]) }}
            </div>
        </div>
        {{-- <button type="button" name="" id="" class="btn btn-primary"
            style="text-transform:lowercase;margin-left:20px">Book Now</button> --}}
<div style="text-transform:lowercase;margin-left:20px">
        {{ Form::submit('Book Now',['class'=>'btn btn-primary']) }}
</div>
        {!! Form::close() !!}
    </div>
    @endforeach


    @endif

    {{-- <div class="row bg-white"
        style="padding-top:20px;padding-bottom:20px;margin-left:0.04%;margin-right:0.04%;margin-bottom:10px">
        <header style="color:navy;font-size:17px;font-weight:bold;margin-bottom:10px;padding-left:20px">Book appointment
            in Service hospital</header>

        <div class='col-sm-6'>
            <div class="form-group">
                <label for="">Select Date</label>
            

                <input type='date' class="form-control" />
            
            </div>
        </div>
        <div class='col-sm-6'>

            <div class="form-group">
                <label for="">Select Time</label>
            

                <input type='time' class="form-control" />
            
            </div>





        </div>
      
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Patient name</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <button type="button" name="" id="" class="btn btn-primary"
            style="text-transform:lowercase;margin-left:20px">Book Now</button>
    </div>
    <div class="row bg-white"
        style="padding-top:20px;padding-bottom:20px;margin-left:0.04%;margin-right:0.04%;margin-bottom:10px">
        <header style="color:navy;font-size:17px;font-weight:bold;margin-bottom:10px;padding-left:20px">Book appointment
            in Saeed Clinic</header>

        <div class='col-sm-6'>
            <div class="form-group">
                <label for="">Select Date</label>
            

                <input type='date' class="form-control" />
                
            </div>
        </div>
        <div class='col-sm-6'>

            <div class="form-group">
                <label for="">Select Time</label>
                

                <input type='time' class="form-control" />
           
            </div>





        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Patient name</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <button type="button" name="" id="" class="btn btn-primary"
            style="text-transform:lowercase;margin-left:20px">Book Now</button>
    </div> --}}


    @endsection