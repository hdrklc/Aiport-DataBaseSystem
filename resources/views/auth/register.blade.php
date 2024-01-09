@extends('layouts.app')
@section('content')
    <div class="card card-register card-white">
        <div class="card-header">
            <img style="width: 40%;margin-left: 350px" src="{{ asset('black') }}/img/asd.jpeg" alt="">
        </div>
        <form class="form" method="post" action="{{ route('register') }}">
            @csrf
            <div class="card-body">
                <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           placeholder="{{ __('Name') }}">
                    @include('alerts.feedback', ['field' => 'name'])
                </div>
                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-email-85"></i>
                        </div>
                    </div>
                    <input type="email" name="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           placeholder="{{ __('Email') }}">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" name="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           placeholder="{{ __('Password') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ __('Confirm Password') }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Get Started') }}</button>
            </div>
        </form>
    </div>
    </div>
@endsection