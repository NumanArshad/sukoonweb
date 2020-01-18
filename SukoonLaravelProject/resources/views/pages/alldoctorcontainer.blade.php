@extends('layouts.app')
@section('childcontent')
<div class="container" style="margin-top:150px">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Find a doctor</li>
    </ol>
    
    @for ($i = 0; $i < 3; $i++) @include('pages.doctordetailitem',['activepage'=>'']) @endfor 
</div> 
@endsection