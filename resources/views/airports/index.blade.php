@extends('layouts.app')
@section('styles')
    <style>
        table {
            overflow: scroll;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Airports</h2>
            </div>
            <div class="pull-right">
                @can('airport-create')
                    <a class="btn btn-success" href="{{ route('airports.create') }}"> Create New Airport</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div style="overflow-x:auto;overflow-y:auto;">
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Airport Name</th>
            <th>Airport Type</th>
            <th>Owner</th>
            <th>City</th>
            <th>Address</th>
            <th>Open Date</th>
            <th>Altitude</th>
            <th>Website</th>
            <th>RunWayLength</th>
            <th>RunWaySurface</th>
            <th>Number</th>
            <th>Geometry Latitude </th>
            <th>Geometry Longitude</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($airports as $airport)
            <tbody>
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $airport->airport_name }}</td>
                <td>{{ $airport->airport_type }}</td>
                <td>{{ $airport->owner }}</td>
                <td>{{ $airport->city }}</td>
                <td>{{ $airport->address }}</td>
                <td>{{ $airport->opdate }}</td>
                <td>{{ $airport->altitude }}</td>
                <td>{{ $airport->website }}</td>
                <td>{{ $airport->rwl }}</td>
                <td>{{ $airport->rws }}</td>
                <td>{{ $airport->number }}</td>
                <td>{{ $airport->geometrylat }}</td>
                <td>{{ $airport->geometrylng }}</td>
                <td width="280px">
                    <form action="{{ route('airports.destroy',$airport->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('airports.show',$airport->id) }}">Show</a>

                        @can('airport-edit')
                            <a class="btn btn-primary" href="{{ route('airports.edit',$airport->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @method('DELETE')
                        @can('airport-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {!! $airports->links() !!}
</div>

    <div>
        <a class="btn btn-primary" href="{{ route('home') }}">Return to map</a>
    </div>
@endsection
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();

        } );

    </script>
@endsection

