@extends('layouts.app')
@section('childcontent')

<div class="container" style="margin-top:150px">
    <ol class=" breadcrumb">
        <li><a href="#">Home</a></li>

        <li class="active">Clinic/Hospitals</li>
    </ol>
</div>
<div class="container bg-white" style="padding-top:10px;padding-bottom:10px">
    {!! Form::open(['action'=>['AllDoctorsController@storehospital',$doctorid],'method'=>'POST']) !!}
    {{-- {{csrf_field()}} --}}
    <div class="col-md-4 col-sm-6 col-xs-6">
        <div class="form-group">

            {{ Form::label('name','Name') }}
            {{ Form::text('name','',['class'=>'form-control','placeholder'=>'enter hospitals/clinic name here']) }}
            {{-- <label for="">Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">

            {{ Form::label('location','Location') }}
            {{ Form::text('location','',['class'=>'form-control','placeholder'=>'enter location here']) }}
            {{-- <label for="">Email</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="form-group">
            {{ Form::label('appointmentfee','Appointment Fee') }}
            {{ Form::text('appointmentfee','',['class'=>'form-control','placeholder'=>'enter appointmentfee here']) }}
            {{-- <label for="">Contact#1</label>
                        <input type="tel" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                            pattern="[0-9]{10}" required>
                        <small id="helpId" class="text-muted">Help text</small>
                        <span class=" "></span> --}}
        </div>
    </div>
    {{-- <div class="col-sm-12 col-xs-12" style="margin-bottom:10px">
            <button type="button" class="btn btn-primary newschedula">New Schedule</button>
            </div> --}}
   
    <div class="col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="">Available Days</label>
            <br>
            <select name="depts" id="example-getting-started" multiple="multiple">
                <option value="Mon">Monday</option>
                <option value="Tue">Tuesday</option>
                <option value="Wed">Wednesday</option>
                <option value="Thur">Thursday</option>
                <option value="Fri">Friday</option>
                <option value="Sat">Saturday</option>
                <option value="Sun">Sunday</option>
            </select>
        </div>

        {{-- <div class="furtherdiv">
                hah
            </div> --}}

    </div>

    <div class="col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="">Start Timings</label>
            <input type="time" name="starttime" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="">EndTimings</label>
            <input type="time" name="endtime" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
    </div>
  
    <div class="col-xs-10">
        {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
    </div>
    <div class="col-xs-2">
        <input type="hidden" class="storeselecteddays" name="selecteddays" value="default valu" />
    </div>
</div>



{!! Form::close() !!}
@endsection