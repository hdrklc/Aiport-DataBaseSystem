@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Airport</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('airports.index') }}"> Back</a>
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

    <form action="{{ route('airports.update',$airport->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Airport Name:</strong>
                    <input type="text" name="airport_name" value="{{$airport->airport_name}}" class="form-control"
                           placeholder="Airport Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Airport Type:</strong>
                    <input type="text" name="airport_type" value="{{$airport->airport_type}}" class="form-control"
                           placeholder="Airport Type">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Owner:</strong>
                    <input type="text" name="owner" value="{{$airport->owner}}" class="form-control"
                           placeholder="Owner">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" value="{{$airport->city}}" class=" form-control" placeholder="City">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{$airport->address}}" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Open Date:</strong>
                    <input type="date" name="opdate" value="{{ Carbon\Carbon::parse($airport->opdate)->format('Y-m-d') }}"  class="form-control" placeholder="Open Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Altitude :</strong>
                    <input type="text" name="altitude" value="{{$airport->altitude}}" class="form-control" placeholder="Altitude">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Website :</strong>
                    <input type="text" name="website" value="{{$airport->website}}" class="form-control" placeholder="Website">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RunWayLength :</strong>
                    <input type="text" name="rwl" value="{{$airport->rwl}}" class="form-control" placeholder="RunWayLength">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RunWaySurface :</strong>
                    <input type="text" name="rws" value="{{$airport->rws}}" class="form-control" placeholder="RunWaySurface">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number :</strong>
                    <input type="text" name="number" value="{{$airport->number}}" class="form-control" placeholder="Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Geometry Latitude:</strong>
                    <input type="text" name="geometrylat" value="{{$airport->geometrylat}}" class="form-control" placeholder="Geometry">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Geometry Longitude :</strong>
                    <input type="text" name="geometrylng" value="{{$airport->geometrylng}}" class="form-control" placeholder="Geometry">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
