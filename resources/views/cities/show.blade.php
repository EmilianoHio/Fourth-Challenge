@extends('layouts.plantilla')

@section('title', 'Cities show')

@section('content')

<h1>Show Cities</h1>

<div class="container d-flex justify-content-center gap-3 ">
    
    <p>{{$city->id}} - {{$city->name_city}}</p>
</div>


 

@endsection