@extends('layouts.plantilla')

@section('title', 'Airline create')

@section('content')

<h1>Create Airline</h1>

<div class="container d-flex justify-content-center gap-3 ">
<form action="{{ route('airlines.store') }}" method="POST" class="col-md-6">
    @csrf
    <div class="form-group">
        <label for="name_airline">Name Airline</label>
        <input type="text" class="form-control" name="name_airline" id="name_airline" placeholder="Name Airline">
        <br>

        <label for="desc_business">Description Business</label>
        <input type="text" class="form-control" name="desc_business" id="desc_business" placeholder="Name City">
         <br>
        

        <div class="form-group">
            <label>Disponibility</label>

            <select class="form-control" name="disponibility" id="disponibility">
                    <option value="1">Si</option>
                    <option value="0">No</option>
            </select>
        </div>

    </div>
    <br>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

</div>


 

@endsection