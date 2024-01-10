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


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="position-relative">
                        <h3 class="mb-0">{{$country->name}}</h3>
                        <br>
                        <img class="img-fluid" src="{{asset('storage/' . $country->img)}}" alt="{{$country->name}}">
                    </div>
                    <div class="mt-4">
                        {!! $country->info !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 404 End -->
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
                                                <option value="{{$country->name}}">{{$country->name}}</option>
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

    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
