@extends('layouts.plantilla')

@section('title', 'Cities show')

@section('content')

<h1>Show Airlines</h1>

<div class="container d-flex justify-content-center gap-3 ">
    <p> <strong>Id: </strong> {{$airline->id}} - <strong>Name: </strong>  {{$airline->name_airline}}  - <strong>Description: </strong> {{$airline->desc_business}}</p>

</div>


 

@endsection