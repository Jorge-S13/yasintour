@php($process = \App\Models\Navbar::first())
<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{route('home')}}" class="navbar-brand">
            <img src="{{asset('img/yasinlogo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">{{$process->main ?? ''}}</a>
                <a href="{{route('packages')}}" class="nav-item nav-link {{ Route::is('packages') ? 'active' : '' }}">{{$process->counties ?? ''}}</a>
                <a href="{{route('destination')}}" class="nav-item nav-link {{ Route::is('destination') ? 'active' : '' }}">{{$process->tours ?? ''}}</a>
                <a href="{{route('aviakassa')}}" class="nav-item nav-link {{ Route::is('aviakassa') ? 'active' : '' }}">{{$process->aviakassa ?? ''}}</a>
                <a href="{{route('services')}}" class="nav-item nav-link {{ Route::is('services') ? 'active' : '' }}">{{$process->services ?? ''}}</a>
                {{--                <div class="nav-item dropdown">--}}
                {{--                    <a href="#" class="nav-link dropdown-toggle {{ Route::currentRouteNamed('destination','booking','team','testimonial','404') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>--}}
                {{--                    <div class="dropdown-menu m-0">--}}
                {{--                        <a href="{{route('destination')}}" class="dropdown-item">Destination</a>--}}
                {{--                        <a href="{{route('booking')}}" class="dropdown-item">Booking</a>--}}
                {{--                        <a href="{{route('team')}}" class="dropdown-item">Travel Guides</a>--}}
                {{--                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>--}}
                {{--                        <a href="{{route('404')}}" class="dropdown-item">404 Page</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <a href="{{route('about')}}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">{{$process->about ?? ''}}</a>
                <a href="{{route('contact')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">{{$process->contact ?? ''}}</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    @include('partials/language_switcher')
                    <h1 class="display-3 text-white mb-3 animated slideInDown">{{$navbarText ?? ''}}</h1>
{{--                    <h1 class="display-3 text-white mb-3 animated slideInDown">{{ __('Welcome to our website!') }}</h1>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@if(session()->has('message'))
    <div class="alert alert-success text-center bold" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
<!-- Navbar & Hero End -->
