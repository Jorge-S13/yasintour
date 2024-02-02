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

    @include('includes.navbar',['navbarText' => $countryPage->navbar_text])

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$countryPage->country_h6}}</h6>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($country as $co)
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
                                    <a href="{{route('country.show',$co->id)}}" class="btn btn-sm btn-primary px-3 border-end">{{$countryPage->button}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
    <!-- Package End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="booking p-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-md-6 text-white">
                            <h6 class="text-white text-uppercase">{{$mainForm->form_h6}}</h6>
                            <h1 class="text-white mb-4">{{$mainForm->form_text_h1}}</h1>
                            <p class="mb-4">{{$mainForm->form_p}}</p>
                        </div>
                        <div class="col-md-6">
                            <h1 class="text-white mb-4">{{$mainForm->form_h1}}</h1>
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
                                            <input type="text" class="form-control bg-transparent" name="name" id="name" placeholder="{{$mainForm->name}}">
                                            <label for="name">{{$mainForm->name}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control bg-transparent" name="phone" id="phone" placeholder="{{$mainForm->phone}}">
                                            <label for="tel">{{$mainForm->phone}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control bg-transparent datetimepicker-input" name="datetime" id="datetime" placeholder="{{$mainForm->date}}" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="datetime">{{$mainForm->date}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select bg-transparent" name="country" id="country">
                                                @foreach(App\Models\Country::all() as $co)
                                                    <option value="{{$co->name}}">{{$co->name}}</option>
                                                @endforeach
                                            </select>
                                            <label for="country">{{$mainForm->country}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-transparent" placeholder="{{$mainForm->description}}" name="message" id="message" style="height: 100px"></textarea>
                                            <label for="message">{{$mainForm->description}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-outline-light w-100 py-3" type="submit">{{$mainForm->button}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
