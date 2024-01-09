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
                <a href="{{route('about')}}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">О нас</a>
                <a href="{{route('services')}}" class="nav-item nav-link {{ Route::is('services') ? 'active' : '' }}">Авиакасса</a>
                <a href="{{route('packages')}}" class="nav-item nav-link {{ Route::is('info') ? 'active' : '' }}">Информация</a>
                <a href="{{route('packages')}}" class="nav-item nav-link {{ Route::is('packages') ? 'active' : '' }}">Страны</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Route::currentRouteNamed('destination','booking','team','testimonial','404') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('destination')}}" class="dropdown-item">Destination</a>
                        <a href="{{route('booking')}}" class="dropdown-item">Booking</a>
                        <a href="{{route('team')}}" class="dropdown-item">Travel Guides</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{route('404')}}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Контакты</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
