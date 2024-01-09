<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <img style="width: 30%" src="{{ asset('black') }}/img/hacettepe.jpg" alt="">
            <a href="{{route('home')}}" class="simple-text logo-normal">{{ __('Airport Database System') }}</a>
        </div>
        <ul class="nav">
            <li @if ('dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-planet"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ('contact') class="active " @endif>
                <a href="{{ route('contact') }}">
                    <i class="tim-icons icon-email-85"></i>
                    <p>{{ __('Contact') }}</p>
                </a>
            </li>
            <li @if ('profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('User Profile') }}</p>
                </a>
            </li>
            @can('role-list')
            <li @if ('roles') class="active " @endif>
                <a href="{{ route('roles.index')  }}">
                    <i class="tim-icons icon-tag"></i>
                    <p>{{ __('Roles') }}</p>
                </a>
            </li>
            @endcan
            @can('role-list')
            <li @if ('users') class="active " @endif>
                <a href="{{ route('users.index')  }}">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <p>{{ __('Users') }}</p>
                </a>
            </li>
            @endcan
            @can('airport-list')
            <li @if ('airports') class="active " @endif>
                <a href="{{ route('airports.index')  }}">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    <p>{{ __('Airports') }}</p>
                </a>
            </li>
            @endcan
        </ul>
    </div>
</div>
