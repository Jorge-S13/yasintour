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

    @include('includes.navbar',['navbarText' => $destinationPage->navbar_text])


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$destinationPage->tour_h6 ?? ''}}</h6>
                <h1 class="mb-5">{{$destinationPage->tour_h1 ?? ''}}</h1>
            </div>
            <div class="row g-4" style="justify-content: space-around;">
                @foreach ($destination as $de)
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{route('destination.show',$de->id)}}">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('storage/' . $de->img) ?? ''}}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{$de->name ?? ''}}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Destination Start -->

    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
