@extends('layouts.app')

@section('content')

@foreach ($homes as $homes)
<header class="hero" style="background-image: url('{{ asset('storage/' . $homes->img) }}');">
    <div class="hero-overlay"></div>
    <div class="container px-5 hero-content">
        <div class="row gx-5 align-items-center">
            <div class="col">
                <div class="display-3 fw-bolder mb-5 text-white"><div class="text-uppercase text-gradient d-inline">{{ $homes->title_1 }}</div></div>
                <div class="fs-2 fw-light text-white">{{ $homes->title_2 }}</div>
                <h1 class="display-2 fw-bolder mb-5 "><span class="fw-light d-inline">{{ $homes->title_3 }}</span></h1>
                <div class="mb-5">
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder me-4" href="/product">{{ $homes->button_left }}</a>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">{{ $homes->button_right }}</a>
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