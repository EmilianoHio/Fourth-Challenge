@extends('layouts.plantilla')

@section('title', 'Airlines')

@section('content')
<h1>Index Airlines</h1>


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
      <th scope="col">Airline</th>
      <th scope="col">City Airline</th>
      <th scope="col">Description</th>
      <th scope="col">Disponibility</th>
      <th scope="col">  <a href="{{route('airlines.create')}}" class="btn btn-success" >create Airlines</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($airlines as $airline)
   
    <tr>
      <th scope="row">{{$airline->id}}</th>
      <td>{{$airline->name_airline}}</td>
      <td>{{$airline->city->name_city}}</td>
      <td>{{$airline->desc_business}}</td>
      <td>  @if ($airline->disponibility == 1)
        <span>Disponibility</span>

        @else
        <span>No Disponibility</span>
        
        @endif
        </td>
      <td>
        <form action="{{ route('airlines.destroy',$airline->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <a class="btn btn-primary" href="{{ route('airlines.show',$airline->id) }}">Show</a>

          <a class="btn btn-primary" href="{{ route('airlines.edit',$airline->id) }}">Edit</a>
          <button type="submit" class="btn btn-danger">Delete</button>
      </form>

      </td>
    </tr>
   
    @endforeach




  </tbody>
</table>




</div>


 

@endsection