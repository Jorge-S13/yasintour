
@extends('layouts.app')

@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('includes.topbar')

    @include('includes.navbar')

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Авиакасса</h6>
                <h1 class="mb-5">Наши авиакассы</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach(App\Models\Aviakassa::get() as $kassa)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/' . $kassa->img)}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">{{$kassa->name}}</h3> <br>
                                <p>Контактный телефон:</p><i class="fa fa-phone-alt me-2"></i><a href="tel:{{$kassa->phone_number}}" class="text-decoration-none text-reset">{{$kassa->phone_number}}</a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Package End -->

    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
