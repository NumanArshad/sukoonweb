@extends('layouts.app')
@section('childcontent')
<div class="container" style="margin-top:150px">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="#">{{$doctor->name}}</li>
        <li class="active">Book Consult Time</li>
    </ol>
    @include('pages.doctordetailitem',['activepage'=>'selectedconsultant'])
    <div class="bg-white" style="padding:20px;margin-bottom:10px;margin-top:-10px">
        <header style="color:navy;font-size:17px;font-weight:bold">Available Contact Number</header>
        {{-- {{ $data }} --}}
        <span style="color:black">{{$doctor->contact_1}}</span>
        <br>
        <span style="color:black">{{$doctor->contact_2}}</span>

    </div>



    <div class="row bg-white"
        style="padding-top:20px;padding-bottom:20px;margin-left:0.04%;margin-right:0.04%;margin-bottom:10px">

        {!! Form::open(['action'=>['AllDoctorsController@storeconsultorder',$doctor->id],'method'=>'POST']) !!}

        <div class="col-sm-6">
            <div class="form-group">
                {{-- <label for="">Name</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small> --}}
                {{ Form::label('Name') }}
                {{ Form::text('name','',['class'=>"form-control"]) }}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {{-- <label for="">Email</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small> --}}
                {{ Form::label('Email') }}
                {{ Form::text('email','',['class'=>"form-control"]) }}
            </div>
        </div>

        <div class='col-sm-6'>
            <div class="form-group">
                {{-- <label for="">Select Date</label>
                <input type='date' class="form-control" /> --}}
                {{ Form::label('Select Date') }}
                {{ Form::date('consultdate','',['class'=>"form-control"]) }}
            </div>
        </div>
        <div class='col-sm-6'>
            <div class="form-group">
                {{-- <label for="">Select Time</label>
                <input type='time' class="form-control" /> --}}
                {{ Form::label('Select Time') }}
                {{ Form::time('consulttime','',['class'=>"form-control"]) }}
            </div>
        </div>
       
 
     
        {{-- <div class='col-sm-6'>

            <div class="form-group">
                <label for="">Select Time</label>
                <div class='input-group date' id='datetimepicker1'>
                   
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

            <script type="text/javascript">
                $(function () {
                  $('#datetimepicker1').datetimepicker();
              });
            </script>



        </div> --}}
        {{-- <button type="button" name="" id="" class="btn btn-primary"
        style="text-transform:lowercase;margin-left:20px">Book Now</button> --}}
        <div style="text-transform:lowercase;margin-left:20px">
            {{ Form::submit('Book Now',['class'=>'btn btn-primary']) }}
    </div>
            {!! Form::close() !!}
       
    </div>



    @endsection