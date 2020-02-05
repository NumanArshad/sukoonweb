@extends('layouts.app')
@section('childcontent')

<div class="container" style="margin-top:150px">
    <ol class=" breadcrumb">
    <li><a href="#">Home</a></li>

    <li class="active">Join as Doctor</li>
    </ol>
</div>
    <div class="container bg-white" style="padding-top:10px;padding-bottom:10px">
        {!! Form::open(['action'=>'AllDoctorsController@store','method'=>'POST','files'=>true]) !!}
        {{-- {{csrf_field()}} --}}
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name','',['class'=>'form-control','placeholder'=>'enter name here']) }}
                {{-- <label for="">Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small> --}}
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">

                {{ Form::label('email','Email') }}
                {{ Form::text('email','',['class'=>'form-control','placeholder'=>'enter email here']) }}
                {{-- <label for="">Email</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small> --}}
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                {{ Form::label('contact_1','Contact#1') }}
                {{ Form::text('contact_1','',['class'=>'form-control','placeholder'=>'enter contact_1 here']) }}
                {{-- <label for="">Contact#1</label>
                        <input type="tel" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                            pattern="[0-9]{10}" required>
                        <small id="helpId" class="text-muted">Help text</small>
                        <span class=" "></span> --}}
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                {!!Form::label('contact_2','Contact#2')!!}
                {{-- {{ Form::label('contact_2','Contact#2') }} --}}
                {{ Form::text('contact_2','',['class'=>'form-control','placeholder'=>'enter contact_2 here']) }}
                {{-- <label for="">Contact#2(optional)</label>
                        <input type="tel" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        <small id="helpId" class="text-muted">Help text</small>
                        <span class=" "></span> --}}
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                {{ Form::label('city','City') }}
                {{ Form::text('city','',['class'=>'form-control','placeholder'=>'enter city here']) }}
                {{-- <label for="">City</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small> --}}

            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                {{ Form::label('img','Profile Image') }}
                {{ Form::file('img') }}
            </div>
        </div>

        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                {{ Form::label('qualification','Qualification') }}
                {{ Form::text('Qualification','',['class'=>'form-control','placeholder'=>'enter qualification here']) }}

            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                {{ Form::label('specialist','Specialist') }}
                {{ Form::text('specialist','',['class'=>'form-control','placeholder'=>'enter specialist here']) }}
            </div>
        </div>
       

        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                {{ Form::label('experience','Experience') }}
                {{ Form::text('experience','',['class'=>'form-control','placeholder'=>'enter experience here']) }}
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Provide Services</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="bookappointment" id="" value="checkedValue" checked>
                    Book Appointment
               
                  </label>
                  <label class="form-check-label" style="margin-left:20px">
                    <input type="checkbox" class="form-check-input" name="consultant" id="" value="checkedValue" checked>
                   
                    Consultant
                  </label>
                </div>
                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
            </div>
        </div>

        <div class="col-xs-12">
            {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
        </div>
    </div>



{!! Form::close() !!}
@endsection