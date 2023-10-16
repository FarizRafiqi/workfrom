@extends('layouts.app')

@section('content')
    <section class="bg-dark px-2 px-md-7 pt-7 pb-24 text-white position-relative">
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
            <form action="{{ route('buildings.index') }}">
                <div class="input-group input-group-lg mb-3">
                    <input type="text" class="form-control" name="search"
                           placeholder="Building name, location, or city..."
                           aria-label="search location" aria-describedby="button-search">
                    <button class="btn btn-success text-white" type="submit" id="button-search">
                        <i class="bi bi-search"></i>
                        Search
                    </button>
                </div>
            </form>
            <a href="{{ route('buildings.index') }}"
               class="btn btn-success text-white btn-lg w-100 mt-4 z-3 position-relative">
                See Our Spaces <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <img src="{{ asset('img/banner-group.png') }}" alt=""
             class="img-fluid position-absolute top-40 bottom-50 start-0 end-0 z-0 opacity-50">
    </section>

    <section class="bg-white px-2 px-md-0 py-5">
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
                    <div class="row gx-md-5">
                        <div class="col-md-6">
                            <img src="{{ asset('img/as-customer.png') }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-md-5">
                            <h2 class="fw-bold mt-4 mt-md-0">The Best Space Available For You</h2>
                            <p>
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
                            </p>

                            <a href="#" class="btn btn-success btn-lg text-white w-100 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-owner" role="tabpanel" aria-labelledby="pills-owner-tab"
                     tabindex="0">
                    <div class="row gx-md-5">
                        <div class="col-md-6">
                            <img src="{{ asset('img/as-owner.png') }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-md-5">
                            <h2 class="fw-bold mt-4 mt-md-0">Improve Office Tower Tenants with Us</h2>
                            <p>
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
                            </p>

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

    <section class="bg-dark px-2 px-md-7 py-5 text-white">
        <div>
            <h2 class="fw-bold text-center mt-5 mb-4">Adjust To Your <br> Needs</h2>
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="accordion" id="useCase">

                                    <div class="accordion-item rounded-0 mb-4">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-dark text-white collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#event"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                Event
                                            </button>
                                        </h2>
                                        <div id="event" class="accordion-collapse collapse"
                                             data-bs-parent="#useCase">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Celebrate the best celebrations and events with the best choice of
                                                    venues and easier access.
                                                </p>

                                                <button class="btn btn-success text-white mt-2 px-md-5">
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
                                             data-bs-parent="#useCase">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Meeting rooms are comfortable, creating an ideal atmosphere for
                                                    effective and productive business meetings
                                                </p>

                                                <button class="btn btn-success text-white mt-2 px-md-5">
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
                                             data-bs-parent="#useCase">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Professionally designed photo room, providing a memorable experience
                                                    for photo shoot sessions
                                                </p>

                                                <button class="btn btn-success text-white mt-2 px-md-5">
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
                                             data-bs-parent="#useCase">
                                            <div class="accordion-body text-white">
                                                <p>
                                                    Complete video shoot room to create stunning and professional video
                                                    results.
                                                </p>

                                                <button class="btn btn-success text-white mt-2 px-md-5">
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
                <div class="row gy-4 justify-content-center">
                    @foreach($buildings as $building)
                        <div class="col-md-4">
                            <div class="card card-nearest-space mx-auto">
                                <div class="overflow-hidden">
                                    <img src="{{ Storage::url($building->images?->first()?->image) }}"
                                         class="card-img-top img-fluid" alt="The 101">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $building->name }}</h5>
                                    <p><i class="bi bi-geo-alt-fill"></i> Jakarta Selatan, DKI Jakarta</p>
                                    <p class="card-text">
                                        {{ $building->address }}
                                    </p>
                                    <a href="{{ route('buildings.show', $building) }}"
                                       class="btn btn-success text-white w-100">More Info</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-2 px-md-7 py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col">
                    <h1 class="fw-bold text-center text-md-start">Frequently Asked Questions</h1>
                </div>
                <div class="col">
                    <div class="accordion text-dark" id="faq">
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
                                 data-bs-parent="#faq">
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
                                 data-bs-parent="#faq">
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
                                 data-bs-parent="#faq">
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
