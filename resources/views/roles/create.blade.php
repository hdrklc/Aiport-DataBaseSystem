@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <label for="permissions" class="form-label">Assign Permissions</label>

        <table class="table table-striped">
            <thead>
            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
            <th scope="col" width="20%">Name</th>
            <th scope="col" width="1%">Guard</th>
            </thead>

            @foreach($permission as $vl)
                <tr>
                    <td>
                        <input type="checkbox"
                               name="permission[{{ $vl->name }}]"
                               value="{{ $vl->name }}"
                               class='permission'>
                    </td>
                    <td>{{ $vl->name }}</td>
                    <td>{{ $vl->guard_name }}</td>
                </tr>
            @endforeach
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
