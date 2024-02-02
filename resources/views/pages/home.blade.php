@extends('layouts.app')

@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


  @include('includes.topbar')

  @include('includes.navbar', ['navbarText' => $process->navbar_text ?? ''])





    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('storage/' . $aboutPage->img ?? '#')}}" alt=""
                             style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">{{$aboutPage->about_h6 ?? ''}}</h6>
                    <h1 class="mb-4">{{$aboutPage->about_h1 ?? ''}} <br> <span class="text-primary">{{$aboutPage->about_span ?? ''}}</span></h1>
                    <p class="mb-4">{{$aboutPage->about_main_p1 ?? ''}}</p>
                    <p class="mb-4">{{$aboutPage->about_main_p2 ?? ''}}</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/contact">{{$aboutPage->button ?? ''}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$servicesPage->services_h6 ?? ''}}</h6>
                <h1 class="mb-5">{{$servicesPage->services_h1 ?? ''}}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item1_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item1_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item2_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item2_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item3_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item3_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item4_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item4_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item5_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item5_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item6_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item6_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item7_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item7_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chevron-down text-primary mb-4"></i>
                            <h5>{{$servicesPage->item8_h5 ?? ''}}</h5>
                            <p>{{$servicesPage->item8_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$destinationPage->tour_h6 ?? ''}}</h6>
                <h1 class="mb-5">{{$destinationPage->tour_h1 ?? ''}}</h1>
            </div>
            <div class="row g-3">
                @foreach (\App\Models\Destination::all() as $de)
                    <div class="col-lg-12 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="{{route('destination.show', $de->id)}}">
                            <img class="img-fluid position-absolute w-100 h-100" src="{{asset('storage/' . $de->img ?? '#')}}" alt="" style="object-fit: cover;">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{$de->name ?? ''}}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$countryPage->country_h6 ?? ''}}</h6>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach(App\Models\Country::take(3)->orderBy('created_at')->get() as $co)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/' . $co->img ?? '#')}}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <h3 class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$co->name ?? ''}}</h3>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">{{$co->price ?? ''}}</h3>
                                <p>{{$co->description ?? ''}}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{route('country.show',$co->id)}}" class="btn btn-sm btn-primary px-3 border-end">{{$countryPage->button ?? ''}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Package End -->
        <!-- Process Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">{{$process->process_h6 ?? ''}}</h6>
                    <h1 class="mb-5">{{$process->process_h1 ?? ''}}</h1>
                </div>
                <div class="row gy-5 gx-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative border border-primary pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-globe fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4">{{$process->process_item1_h5 ?? ''}}</h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0">{{$process->process_item1_p ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative border border-primary pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-dollar-sign fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4">{{$process->process_item2_h5 ?? ''}}</h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0">{{$process->process_item2_p ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative border border-primary pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-plane fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4">{{$process->process_item3_h5 ?? ''}}</h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0">{{$process->process_item3_p ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process Start -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">{{$mainForm->form_h6 ?? ''}}</h6>
                        <h1 class="text-white mb-4">{{$mainForm->form_text_h1 ?? ''}}</h1>
                        <p class="mb-4">{{$mainForm->form_p ?? ''}}</p>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">{{$mainForm->form_h1 ?? ''}}</h1>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form method="post" action="{{route('saveContact')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" name="name" id="name" placeholder="{{$mainForm->name ?? ''}}">
                                        <label for="name">{{$mainForm->name ?? ''}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control bg-transparent" name="phone" id="phone" placeholder="{{$mainForm->phone ?? ''}}">
                                        <label for="tel">{{$mainForm->phone ?? ''}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input" name="datetime" id="datetime" placeholder="{{$mainForm->date ?? ''}}" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">{{$mainForm->date ?? ''}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" name="country" id="country">
                                            @foreach(App\Models\Country::all() as $co)
                                                <option value="{{$co->name ?? ''}}">{{$co->name ?? ''}}</option>
                                            @endforeach
                                        </select>
                                        <label for="country">{{$mainForm->country ?? ''}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="{{$mainForm->description ?? ''}}" name="message" id="message" style="height: 100px"></textarea>
                                        <label for="message">{{$mainForm->description ?? ''}}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">{{$mainForm->button ?? ''}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$aboutPage->team_h6 ?? ''}}</h6>
                <h1 class="mb-5">{{$aboutPage->team_h1 ?? ''}}</h1>
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
                                <img class="img-fluid" src="{{asset('storage/' . $team->img  ?? '#')}}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{$team->name ?? ''}}</h5>
                                <small>{{$team->job_title ?? ''}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$process->feedback_h6 ?? ''}}</h6>
                <h1 class="mb-5">{{$process->feedback_h1 ?? ''}}</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach(App\Models\Testimonial::take(4)->orderBy('created_at')->get() as $testimonial)
                    <div class="testimonial-item bg-white text-center border p-4">
                        <h5 class="mb-0">{{$testimonial->name ?? ''}}</h5>
                        <p>{{$testimonial->city ?? ''}}</p>
                        <p class="mb-0">{{$testimonial->text ?? ''}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Testimonial End -->


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
