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
                    <p class="mb-4">Мы турагентство, которое заботится о вашем путешествии с самого начала до самого конца.</p>
                    <p class="mb-4">Присоединяйтесь к Yasin Avia Travel и откройте для себя мир возможностей, который ждет вас за границей!</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/contact">Начать</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Услуги</h6>
                <h1 class="mb-5">Наши услуги</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Путешествия по миру</h5>
                            <p>Изысканные туры по всему миру, включая экзотические места и культурные путешествия, созданные специально для вас.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Помощь в оформлении документов</h5>
                            <p>Консультации и помощь в оформлении необходимых документов для путешествий: визы, страховки и другая документация.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Бронирование отелей и трансферы</h5>
                            <p>Помощь в выборе лучших отелей по всему миру и организация комфортных трансферов для вашего удобства.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Отдых семьей</h5>
                            <p>Специальные предложения и пакеты для отдыха семьей: от детских программ до разнообразных развлечений для каждого члена семьи.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Индивидуальное планирование</h5>
                            <p>Персональный подход к каждому клиенту: создание индивидуальных маршрутов и организация поездок с учетом ваших пожеланий.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Консультации по путешествиям и туристическим направлениям</h5>
                            <p>Наши эксперты всегда готовы поделиться знаниями и советами по различным туристическим направлениям, помогая выбрать идеальное место для вашего отпуска или путешествия.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Создание историй, а не просто путешествий</h5>
                            <p>Мы не просто организовываем поездки — мы помогаем вам создавать неповторимые истории, наполненные впечатлениями, эмоциями и неожиданными открытиями.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Эмоциональное погружение в культуру</h5>
                            <p>Мы создаем не просто путешествия, а возможность глубоко погрузиться в местную культуру и атмосферу. Откройте для себя новые эмоции, вкусы и впечатления, погружаясь в уникальные аспекты каждого места.</p>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Направление</h6>
                <h1 class="mb-5">Популярное направление</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-1.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Thailand</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-2.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Malaysia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/destination-3.jpg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Australia</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indonesia</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Страны</h6>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach(App\Models\Country::take(3)->orderBy('created_at')->get() as $co)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/' . $co->img)}}" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <h3 class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$co->name}}</h3>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">{{$co->price}}</h3>
                                <p>{{$co->description}}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{route('country.show',$co->id)}}" class="btn btn-sm btn-primary px-3 border-end">Читать далее</a>
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
                    <h6 class="section-title bg-white text-center text-primary px-3">Процесс бронирования</h6>
                    <h1 class="mb-5">3 простых шага</h1>
                </div>
                <div class="row gy-5 gx-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative border border-primary pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-globe fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4">Выберите направление</h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0">Погрузитесь в мир возможностей и выберите свое идеальное направление для путешествия. От прекрасных горизонтов до культурных столиц. Мы предлагаем широкий выбор направлений, чтобы каждый мог найти что-то особенное для себя.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative border border-primary pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-dollar-sign fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4">Заполните форму</h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0">Поделитесь вашими предпочтениями и датами вашего будущего путешествия. Заполните нашу форму бронирования, указав ваше имя, контактную информацию, дату предполагаемого отъезда и выбранное направление.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative border border-primary pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-plane fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4">Ждите ответа оператора</h5>
                            <hr class="w-25 mx-auto bg-primary mb-1">
                            <hr class="w-50 mx-auto bg-primary mt-0">
                            <p class="mb-0">Наши операторы свяжутся с вами в кратчайшие сроки после получения вашего запроса. Они уделят внимание каждой детали вашего предпочтения, чтобы предоставить вам оптимальные варианты для вашего путешествия.</p>
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
                        <h6 class="text-white text-uppercase">Бронирование</h6>
                        <h1 class="text-white mb-4">Бронирование онлайн</h1>
                        <p class="mb-4">Добро пожаловать в форму бронирования! Мы готовы помочь сделать ваше путешествие незабываемым. Пожалуйста, укажите ваше имя, чтобы мы могли обращаться к вам лично, и адрес электронной почты для связи. Укажите также желаемую дату бронирования и направление вашего путешествия. Наша команда тщательно обработает ваш запрос, учтет все ваши предпочтения и постарается сделать ваше путешествие идеальным.</p>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Забронировать тур</h1>
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
                                        <input type="text" class="form-control bg-transparent" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Имя</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control bg-transparent" name="phone" id="phone" placeholder="Phone Number">
                                        <label for="tel">Номер телефона</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input" name="datetime" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Дата и время</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" name="country" id="country">
                                            @foreach(App\Models\Country::all() as $co)
                                                <option value="{{$co->name}}">{{$co->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="country">Выберите направление</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" name="message" id="message" style="height: 100px"></textarea>
                                        <label for="message">Пожелания</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Оставить заявку</button>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Команда</h6>
                <h1 class="mb-5">Наша команда</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Отзывы</h6>
                <h1 class="mb-5">Наши клиенты говорят!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach(App\Models\Testimonial::take(4)->orderBy('created_at')->get() as $testimonial)
                    <div class="testimonial-item bg-white text-center border p-4">
                        <h5 class="mb-0">{{$testimonial->name}}</h5>
                        <p>{{$testimonial->city}}</p>
                        <p class="mb-0">{{$testimonial->text}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
