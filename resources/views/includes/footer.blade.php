@php($settings = \App\Models\Settings::find(1))
@php($process = \App\Models\Footer::first())
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Yasin avia travel</h4>
                <a class="btn btn-link" href="{{route('about')}}">{{$process->about ?? ''}}</a>
                <a class="btn btn-link" href="{{route('contact')}}">{{$process->contact ?? ''}}</a>
                <a class="btn btn-link" href="{{route('services')}}">{{$process->information ?? ''}}</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">{{$process->contact ?? ''}}</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a href="https://www.google.com/maps/place/41%C2%B018'13.6%22N+69%C2%B017'19.8%22E/@41.303271,69.288873,15z/data=!4m4!3m3!8m2!3d41.3037778!4d69.2888333?hl=uz&entry=ttu" class="text-decoration-none text-reset">{{$settings->address}}</a></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:{{$settings->phone_number ?? ''}}" class="text-decoration-none text-reset">{{$settings->phone_number ?? ''}}</a></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{$settings->facebook_url ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{$settings->telegram_url ?? ''}}"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{$settings->instagram_url ?? ''}}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <h4 class="text-white mb-3">Gallery</h4>--}}
{{--                <div class="row g-2 pt-2">--}}
{{--                    <div class="col-4">--}}
{{--                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--                        <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--                        <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-4">--}}
{{--                        <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <h4 class="text-white mb-3">Newsletter</h4>--}}
{{--                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>--}}
{{--                <div class="position-relative mx-auto" style="max-width: 400px;">--}}
{{--                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">--}}
{{--                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
