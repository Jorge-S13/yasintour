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

    @include('includes.navbar',['navbarText' => $servicesPage->navbar_text ?? ''])

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


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
