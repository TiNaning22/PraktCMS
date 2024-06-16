    @extends('layouts.app')

    @section('content')
        <body class="d-flex flex-column h-100 bg-light">
            <main class="flex-shrink-0">
                <!-- Navigation-->
                <!-- Projects Section-->
                <section class="py-5">
                    <div class="container px-5 mb-5">
                        <div class="text-center mb-5">
                            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Product</span></h1>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-11 col-xl-9 col-xxl-8">
                                <!-- Project Card 1-->

                                @foreach ($product as $products)
                                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center">
                                            <div class="p-5">
                                                <h2 class="fw-bolder">{{ $products->Nama_Barang }}</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                            </div>
                                            <img class="img-fluid" src="{{ asset('storage/' .$products->image) }}" alt="..." />
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                <!-- Project Card 2-->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Call to action section-->
                <section class="py-5 bg-gradient-primary-to-secondary text-white">
                    <div class="container px-5 my-5">
                        <div class="text-center">
                            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact me</a>
                        </div>
                    </div>
                </section>
            </main>
        </body>
    </html>
    {{-- <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Personal - Start Bootstrap Template</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Custom Google font-->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
            <!-- Bootstrap icons-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />
        </head>
        <body class="d-flex flex-column h-100 bg-light">
            <main class="flex-shrink-0">

                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Experience Section-->
                            <section>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                    <!-- Download resume button-->
                                    <!-- Note: Set the link href target to a PDF file within your project-->
                                    <a class="btn btn-primary px-4 py-3" href="#!">
                                        <div class="d-inline-block bi bi-download me-2"></div>
                                        Download Resume
                                    </a>
                                </div>
                                <!-- Experience Card 1-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                                                    <div class="small fw-bolder">Web Developer</div>
                                                    <div class="small text-muted">Stark Industries</div>
                                                    <div class="small text-muted">Los Angeles, CA</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Experience Card 2-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-primary fw-bolder mb-2">2017 - 2019</div>
                                                    <div class="small fw-bolder">SEM Specialist</div>
                                                    <div class="small text-muted">Wayne Enterprises</div>
                                                    <div class="small text-muted">Gotham City, NY</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Education Section-->
                            <section>
                                <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                                <!-- Education Card 1-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                                    <div class="mb-2">
                                                        <div class="small fw-bolder">Barnett College</div>
                                                        <div class="small text-muted">Fairfield, NY</div>
                                                    </div>
                                                    <div class="fst-italic">
                                                        <div class="small text-muted">Master's</div>
                                                        <div class="small text-muted">Web Development</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                                        </div>
                                    </div>
                                </div>
                             --}}
        
    @endsection