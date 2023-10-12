@extends('layouts.app')

@section('content')
    <section class="bg-dark px-7 pt-7 pb-24 text-white position-relative">
        <h5 class="text-center fw-bold text-uppercase">Office & co working space</h5>
        <h1 class="text-center fw-bolder">
            Find a Workspace
        </h1>
        <h2 class="text-center fw-bolder">
            For Your Needs
        </h2>
        <p class="text-center my-4 fs-5 fw-light">
            Meeting Rooms, Office, and Co Working Space Available.
        </p>
        <div class="container px-md-10 px-xl-28 position-relative z-3">
            <div class="input-group input-group-lg mb-3">
                <input type="text" class="form-control" placeholder="Input Location..."
                       aria-label="Recipient's username" aria-describedby="button-search">
                <button class="btn btn-success text-white" type="button" id="button-search">
                    <i class="bi bi-search"></i>
                    Search
                </button>
            </div>
            <button type="button" class="btn btn-success text-white btn-lg w-100 mt-4 z-3 position-relative">
                See Our Spaces <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <img src="{{ asset('img/banner-group.png') }}" alt=""
             class="img-fluid position-absolute top-40 bottom-50 start-0 end-0 z-0 opacity-50">
    </section>

    <section class="bg-white py-5">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item me-4" role="presentation">
                    <button class="nav-link px-3 py-2 fs-5 active" id="pills-customer-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-csutomer" type="button" role="tab" aria-controls="pills-csutomer"
                            aria-selected="true">as Customer
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-3 py-2 fs-5" id="pills-owner-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-owner"
                            type="button" role="tab" aria-controls="pills-owner" aria-selected="false">as Owner
                    </button>
                </li>
            </ul>
        </div>
        <div class="container mt-4">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-csutomer" role="tabpanel"
                     aria-labelledby="pills-customer-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('img/as-customer.png') }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-md-5">
                            <h2 class="fw-bold mt-4 mt-md-0">The Best Space Available For You</h2>
                            <h6>
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing
                                elit. Integer in efficitur nulla, sed egestas nulla. Curabitur rhoncus, arcu at
                                fermentum malesuada,
                                dolor lorem porttitor justo, vel bibendum ligula mi vitae est. Pellentesque tincidunt
                                orci quis volutpat
                                mattis. Duis commodo magna non tortor fringilla, id faucibus lorem efficitur. Vivamus
                                lacus lectus,
                                posuere lacinia dignissim vitae, placerat vel lacus. Aenean lacus nisi, faucibus vitae
                                imperdiet vel,
                                sagittis sit amet tortor. Aenean ac metus ante. Mauris maximus dolor odio, et dictum
                                arcu cursus et.
                                Mauris vehicula, dolor et ultrices interdum, ex tellus aliquam arcu, sed placerat sem
                                ligula in ex. Nunc
                                vestibulum sapien id ligula maximus, sit amet bibendum leo porttitor. Praesent convallis
                                erat nec lorem
                                aliquam gravida. Sed consectetur vestibulum leo a vulputate. In malesuada velit at
                                mollis dapibus.
                                Nullam id gravida nulla.
                            </h6>

                            <a href="#" class="btn btn-success btn-lg text-white w-100 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-owner" role="tabpanel" aria-labelledby="pills-owner-tab"
                     tabindex="0">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('img/as-owner.png') }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-5">
                            <h2 class="fw-bold">Improve Office Tower Tenants with Us</h2>
                            <h6>
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing
                                elit. Integer in efficitur nulla, sed egestas nulla. Curabitur rhoncus, arcu at
                                fermentum malesuada,
                                dolor lorem porttitor justo, vel bibendum ligula mi vitae est. Pellentesque tincidunt
                                orci quis volutpat
                                mattis. Duis commodo magna non tortor fringilla, id faucibus lorem efficitur. Vivamus
                                lacus lectus,
                                posuere lacinia dignissim vitae, placerat vel lacus. Aenean lacus nisi, faucibus vitae
                                imperdiet vel,
                                sagittis sit amet tortor. Aenean ac metus ante. Mauris maximus dolor odio, et dictum
                                arcu cursus et.
                                Mauris vehicula, dolor et ultrices interdum, ex tellus aliquam arcu, sed placerat sem
                                ligula in ex. Nunc
                                vestibulum sapien id ligula maximus, sit amet bibendum leo porttitor. Praesent convallis
                                erat nec lorem
                                aliquam gravida. Sed consectetur vestibulum leo a vulputate. In malesuada velit at
                                mollis dapibus.
                                Nullam id gravida nulla.
                            </h6>

                            <a href="#" class="btn btn-success btn-lg text-white w-100 mt-2">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="fw-bold text-center mt-5">Our Partners</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 mt-4">
                    <div class="row text-center">
                        <div class="col">
                            <img src="{{ asset('img/partners/partner-1.png') }}" alt="Clapham" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/partners/partner-2.png') }}" alt="Clapham" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/partners/partner-3.png') }}" alt="Clapham" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/partners/partner-4.png') }}" alt="Clapham" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark px-7 py-5 text-white">
        <div>
            <h2 class="fw-bold text-center mt-5 mb-4">Adjust To Your <br> Needs</h2>
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="accordion" id="accordionExample">

                                    <div class="accordion-item rounded-0 mb-4">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-dark text-white" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#event"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                Event
                                            </button>
                                        </h2>
                                        <div id="event" class="accordion-collapse collapse show"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Rayakan perayaan dan acara terbaik dengan tempat pilihan terbaik dan
                                                    akses lebih mudah.
                                                </p>

                                                <button class="btn btn-success text-white mt-2 w-50">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item border-top rounded-0 mb-4">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-dark text-white collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#meeting"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                Meeting
                                            </button>
                                        </h2>
                                        <div id="meeting" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Ruang rapat nyaman, menciptakan suasana ideal untuk pertemuan bisnis
                                                    yang efektif dan produktif
                                                </p>

                                                <button class="btn btn-success text-white mt-2 w-50">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item border-top rounded-0 mb-4">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-dark text-white collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#photoShoot"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                Photo Shoot
                                            </button>
                                        </h2>
                                        <div id="photoShoot" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Ruang foto dengan design profesional, memberikan pengalaman berkesan
                                                    untuk sesi pemotretan
                                                </p>

                                                <button class="btn btn-success text-white mt-2 w-50">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item border-top rounded-0 mb-4">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-dark text-white collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#videoShoot"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                Video Shoot
                                            </button>
                                        </h2>
                                        <div id="videoShoot" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Ruang video shoot lengkap untuk menciptakan hasil video yang memukau
                                                    dan
                                                    profesional.
                                                </p>

                                                <button class="btn btn-success text-white mt-2 w-50">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-8 text-end">
                                <img src="{{ asset('img/section-adjust-to-your-needs.png') }}"
                                     alt="Adjust To Your Needs Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="fw-bold text-center mt-5 mb-4">Choose Your Nearest <br> Space</h2>

            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card card-nearest-space mx-auto">
                            <div class="overflow-hidden">
                                <img src="{{ asset('img/ns-1.png') }}" class="card-img-top img-fluid" alt="The 101">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">The 101</h5>
                                <p><i class="bi bi-geo-alt-fill"></i> Jakarta Selatan, DKI Jakarta</p>
                                <p class="card-text">
                                    Kawasan, Jl. Mega Kuningan Barat Jl. DR. Ide Anak Agung Gde Agung No.1, RT.5/RW.2,
                                    Kuningan, Kuningan Tim., Kecamatan Setiabudi, 12950
                                </p>
                                <a href="#" class="btn btn-success text-white w-100">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-nearest-space mx-auto">
                            <div class="overflow-hidden">
                                <img src="{{ asset('img/ns-2.png') }}" class="card-img-top img-fluid" alt="Clapham">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Clapham</h5>
                                <p><i class="bi bi-geo-alt-fill"></i> Medan, Sumatra Utara</p>
                                <p class="card-text">
                                    Komp. Ruko Centre Point Medan Jl. Timor Blok G No. III/IV 2nd Floor, Gang Buntu,
                                    Medan Timur, 20231
                                </p>
                                <a href="#" class="btn btn-success text-white w-100">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-nearest-space mx-auto">
                            <div class="overflow-hidden">
                                <img src="{{ asset('img/ns-3.png') }}" class="card-img-top img-fluid" alt="Spasi">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Spasi</h5>
                                <p><i class="bi bi-geo-alt-fill"></i> Medan, Sumatra Utara</p>
                                <p class="card-text">
                                    Komplek Multatuli Indah, Jl. Multatuli No.30-31, Hamdan, Kec. Medan Maimun, 20212
                                </p>
                                <a href="#" class="btn btn-success text-white w-100">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-7 py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold">Frequently Asked Questions</h1>
                </div>
                <div class="col">
                    <div class="accordion text-dark" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-whtie" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="fs-4 fw-bold">
                                        Apa itu Workfrom?
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Workfrom merupakan sebuah platform yang menghubungkan penyewa dengan ruang
                                        kantor yang tepat di mana saja di berbagai lokasi. Kami dapat membantu menemukan
                                        kebutuhan penyewa dan pemilik gedung.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="fs-4 fw-bold">
                                        Fasilitas apa saja yang ditawarkan?
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Fasilitas mencakup akses internet berkecepatan tinggi, minuman gratis, area
                                        hiburan dan area lounge, serta kesempatan untuk memperluas networking.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span class="fs-4 fw-bold">
                                        Apakah buka di akhir pekan dan hari libur?
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Private Office tutup selama akhir pekan dan hari libur. Tetapi kedepannya bisa
                                        terdapat perubahan pada jam operasional kami.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection