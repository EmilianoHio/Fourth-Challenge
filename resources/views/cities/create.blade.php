@extends('layouts.plantilla')

@section('title', 'Cities create')

@section('content')

<h1>Create Cities</h1>

<div class="container d-flex justify-content-center gap-3 ">
<form action="{{ route('cities.store') }}" method="POST" class="col-md-6">
    @csrf
    <div class="form-group">
        <label for="name_city">Name</label>
        <input type="text" class="form-control" name="name_city" id="name_city" placeholder="Name City">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

</div>


 

@endsection