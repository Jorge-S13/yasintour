@php($settings = \App\Models\Settings::find(1))
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

    @include('includes.navbar',['navbarText' => $contactPage->navbar_text])


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$contactPage->contact_h6 ?? ''}}</h6>
                <h1 class="mb-5">{{$contactPage->contact_h1 ?? ''}}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">{{$contactPage->contact_h5_office ?? ''}}</h5>
                            <p class="mb-0">{{$settings->address ?? ''}}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">{{$contactPage->contact_h5_phone ?? ''}}</h5>
                            <p class="mb-0"><a href="tel:{{$settings->phone_number ?? ''}}" class="text-decoration-none text-reset">{{$settings->phone_number ?? ''}}</a></p>
                        </div>
                    </div>
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">--}}
{{--                            <i class="fa fa-envelope-open text-white"></i>--}}
{{--                        </div>--}}
{{--                        <div class="ms-3">--}}
{{--                            <h5 class="text-primary">Email</h5>--}}
{{--                            <p class="mb-0">info@example.com</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d5994.466696009942!2d69.28883!3d41.303787!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE4JzEzLjYiTiA2OcKwMTcnMTkuOCJF!5e0!3m2!1suz!2s!4v1704798997799!5m2!1suz!2s"
                            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
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
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{$contactForm->name ?? ''}}">
                                    <label for="name">{{$contactForm->name ?? ''}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{$contactForm->email ?? ''}}">
                                    <label for="email">{{$contactForm->email ?? ''}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="{{$contactForm->phone ?? ''}}">
                                    <label for="subject">{{$contactForm->phone ?? ''}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="{{$contactForm->description ?? ''}}" name="message" id="message" style="height: 100px"></textarea>
                                    <label for="message">{{$contactForm->description ?? ''}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">{{$contactForm->button ?? ''}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
