@extends('layouts.app')
@section('childcontent')
<div class="container" style="margin-top:150px">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Find a doctor</li>
        <li class="active">{{$specialisttype}}</li>
        
    </ol>

    {{-- @for ($i = 0; $i < 3; $i++) @include('pages.doctordetailitem',['activepage'=>''])
     @endfor  --}}
    @if (count($getalldoctor)>0)
        @foreach ($getalldoctor as $doctor)
           @include('pages.doctordetailitem',['activepage'=>''])
         @endforeach
         {{-- @foreach ($fee as $item)
        <h1>{{$item}}</h1>
       @endforeach --}}
    @endif

</div>
@endsection