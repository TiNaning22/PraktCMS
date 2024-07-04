@extends('layouts.app')

@section('content')

<header class="py-5">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->

                @foreach ($homes as $homes)
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary mb-2"><div class="text-uppercase">{{ $homes->title_1 }}</div></div>
                    <div class="fs-3 fw-light text-muted text-white">{{ $homes->title_2 }}</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="fw-light fs-7 d-inline ">{{ $homes->title_3 }}</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/product">{{ $homes->button_left }}</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">{{ $homes->button_right }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile height="250" width="780"">
                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                        <img class="profile-img p-6" src="{{ asset('storage/' .$homes->img) }}" alt="Gambar"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">{{ $homes->about_me_title }}</span></h2>
                    <p class="lead fw-light mb-5">{{ $homes->about_me_desc }}</p>
                    <p class="text-muted"></p>
                    
                    
                    
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>

@endsection