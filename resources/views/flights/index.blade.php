@extends('layouts.plantilla')

@section('title', 'Cities')

@section('content')
<h1>Index Cities</h1>


@if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
@endif





<div class="container gap-3 ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">City</th>
      <th scope="col">  <a href="{{route('cities.create')}}" class="btn btn-success" >create Cities</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cities as $city)
   
    <tr>
      <th scope="row">{{$city->id}}</th>
      <td>{{$city->name_city}}</td>
      <td>
        <form action="{{ route('cities.destroy',$city->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <a class="btn btn-primary" href="{{ route('cities.show',$city->id) }}">show</a>

          <a class="btn btn-primary" href="{{ route('cities.edit',$city->id) }}">Edit</a>
          <button type="submit" class="btn btn-danger">Delete</button>
      </form>

      </td>
    </tr>
   
    @endforeach




  </tbody>
</table>




</div>


 

@endsection