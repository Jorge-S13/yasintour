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
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-2.jpg" alt=""
                             style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">О нас</h6>
                    <h1 class="mb-4">Добро пожаловать в <br> <span class="text-primary">Yasin Avia Travel</span></h1>
                    <p class="mb-4">Мы - команда энтузиастов, преданная идее помочь вам открыть для себя самые удивительные уголки мира. </p>
                    <p class="mb-4">Наше турагентство уделяет особое внимание каждому клиенту, стремясь предоставить индивидуальный подход и высочайший уровень обслуживания.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Путешествия по миру</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Помощь в оформлении документов</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Бронирование отелей и трансферы</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Отдых семьей</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Индивидуальное планирование
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Круглосуточное обслуживание</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/contact">Начать</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
{{--    <div class="container-xxl py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>--}}
{{--                <h1 class="mb-5">Meet Our Guide</h1>--}}
{{--            </div>--}}
{{--            <div class="row g-4">--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <div class="team-item">--}}
{{--                        <div class="overflow-hidden">--}}
{{--                            <img class="img-fluid" src="img/team-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                    <div class="team-item">--}}
{{--                        <div class="overflow-hidden">--}}
{{--                            <img class="img-fluid" src="img/team-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                    <div class="team-item">--}}
{{--                        <div class="overflow-hidden">--}}
{{--                            <img class="img-fluid" src="img/team-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                    <div class="team-item">--}}
{{--                        <div class="overflow-hidden">--}}
{{--                            <img class="img-fluid" src="img/team-4.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Team End -->


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
