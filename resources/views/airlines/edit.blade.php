@extends('layouts.plantilla')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Airlines</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('airlines.update',$airline->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name Airline:</strong>
                    <input type="text" name="name_airline" value="{{ $airline->name_airline }}" class="form-control">
                    <strong>Description Business:</strong>
                    <input type="text" name="desc_business" value="{{ $airline->desc_business }}" class="form-control">
                    <div class="form-group">
                        <label>Disponibility</label>
            
                        <select class="form-control" name="disponibility" id="disponibility">
                            @if ( $airline->disponibility == 1)
                                
                                <option value="1" selected>Disponible</option>
                                <option value="0">No Disponible</option>
                                
                                -@else
                               
                                <option value="1">Disponible</option>
                                <option value="0" selected>No Disponible</option>
                          @endif
                        </select>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
    </form>

@endsection