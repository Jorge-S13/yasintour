@php($settings = \App\Models\Settings::find(1))
<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i><a href="https://www.google.com/maps/place/41%C2%B018'13.6%22N+69%C2%B017'19.8%22E/@41.303271,69.288873,15z/data=!4m4!3m3!8m2!3d41.3037778!4d69.2888333?hl=uz&entry=ttu" class="text-decoration-none text-reset">{{$settings->address}}</a></small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><a href="tel:{{$settings->phone_number ?? ''}}" class="text-decoration-none text-reset">{{$settings->phone_number ?? ''}}</a></small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$settings->facebook_url ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$settings->telegram_url ?? ''}}"><i class="fab fa-telegram"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{$settings->instagram_url ?? ''}}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
