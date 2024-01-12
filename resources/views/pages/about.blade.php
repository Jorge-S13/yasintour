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

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('storage/' . $aboutPage->img)}}" alt=""
                             style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">{{$aboutPage->about_h6}}</h6>
                    <h1 class="mb-4">{{$aboutPage->about_h1}}<br> <span class="text-primary">{{$aboutPage->about_span}}</span></h1>
                    <p class="mb-4">{{$aboutPage->about_main_p1}}</p>
                    <p class="mb-4">{{$aboutPage->about_main_p2}}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$aboutPage->about_p1}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$aboutPage->about_p2}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$aboutPage->about_p3}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$aboutPage->about_p4}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$aboutPage->about_p5}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{$aboutPage->about_p6}}</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/contact">{{$aboutPage->button}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$aboutPage->team_h6}}</h6>
                <h1 class="mb-5">{{$aboutPage->team_h1}}</h1>
            </div>
            <div class="row g-4">
                @foreach(App\Models\Team::take(3)->orderBy('created_at')->get() as $team)
                    @php
                        $count = $team->count();

                        $result = ($count == 1) ? 'col-lg-12 col-md-6 wow fadeInUp' : (($count == 2) ? 'col-lg-6 col-md-6 wow fadeInUp' : (($count == 3) ? 'col-lg-4 col-md-6 wow fadeInUp' : 'col-lg-12 col-md-6 wow fadeInUp'))
                    @endphp

                    <div class="{{$result}}" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/' . $team->img)}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{$team->name}}</h5>
                                <small>{{$team->job_title}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
