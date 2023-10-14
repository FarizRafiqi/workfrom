@extends('layouts.app')

@section('title', 'Detail Ruangan')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <style>
        #map {
            height: 500px;
        }
    </style>
@endpush

@section('content')
    <div class="container my-6">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-success">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('rooms.index') }}" class="text-success">Room</a>
                </li>
                <li class="breadcrumb-item active">{{ \Str::title($room->name) }}</li>
            </ol>
        </nav>

        <div class="row align-items-center my-4">
            <div class="col">
                <h1>{{ \Str::title($room->name) }}</h1>
            </div>
            <div class="col text-end">
                <a href="#" class="btn btn-success text-white px-4 me-2">
                    Book Now
                </a>
                <a href="#" class="btn btn-outline-success px-5">
                    Chat
                </a>
            </div>
        </div>

        {{--  Start Carousel  --}}
        <div id="buildingImages" class="carousel slide shadow-lg">
            <div class="carousel-indicators">
                @if(count($room->images) > 1)
                    @foreach($room->images as $image)
                        <button type="button" data-bs-target="#buildingImages" data-bs-slide-to="{{ $loop->index }}"
                                class="{{ $loop->iteration === 1 ? 'active' : '' }}" aria-current="true"
                                aria-label="Slide {{ $loop->iteration }}"></button>
                    @endforeach
                @endif
            </div>
            <div class="carousel-inner">
                @forelse($room->images as $image)
                    <div class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
                        <img src="{{
                                Storage::exists('public/' . $image->image) ?
                                Storage::url($image->image) : $image->image
                        }}" class="d-block w-100 object-fit-cover" alt="img-{{ $loop->index }}" height="600px">
                    </div>
                @empty
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/1920x1080.png/CCCCCC?text=No+Image"
                             class="d-block w-100 object-fit-cover" alt="Image Placeholder" height="600px">
                    </div>
                @endforelse
            </div>
            @if(count($room->images) > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#buildingImages"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#buildingImages"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            @endif
        </div>
        {{--  End Carousel  --}}

        {{--  Start Amenities  --}}
{{--        <section class="mt-5 mb-4">--}}
{{--            <h2 class="fw-bold mb-4">Amenities</h2>--}}
{{--            <div class="card bg-white p-3">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row row-cols-3 align-items-center">--}}
{{--                        @forelse($room->amenities()->get() as $roomAmenity)--}}
{{--                            <div class="col">--}}
{{--                                <i class="{{ $roomAmenity->amenity->icon }} fs-4 me-2"></i>--}}
{{--                                <span>{{ $roomAmenity->amenity->name }}</span>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                            <p>Not Available</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        {{--  End Amenities  --}}

        {{--  Start Nearby Facilities  --}}
{{--        <section class="mt-5 mb-4">--}}
{{--            <h2 class="fw-bold mb-4">Nearby Facilities</h2>--}}
{{--            <div class="card bg-white p-3">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row row-cols-3">--}}
{{--                        @forelse($room->nearbyFacilities as $nearbyFacility)--}}
{{--                            <div class="col">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-1">--}}
{{--                                        <i class="{{ $nearbyFacility->facility->icon }} fs-4 me-2"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-11">--}}
{{--                                        <span>{{ \Str::title($nearbyFacility->name) }}</span>--}}
{{--                                        <div>{{ $nearbyFacility->distance }} m</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                            <p>Not Available</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        {{--  End Nearby Facilities  --}}

        {{--  Start Plans and Pricing  --}}
        <section class="mt-5 mb-4">
            <h2 class="fw-bold mb-4">Plans and Pricing</h2>

            <div class="row gx-6">
                <div class="col-md-7">
                    <div class="card bg-white mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="fw-bold">Private Office</h4>
                                    <p class="m-0">Private and secure offices for teams of any size.</p>
                                </div>
                                <div class="col text-end">
                                    <div>Starts from</div>
                                    <h3 class="fw-bold">Rp. 1.000.000</h3>
                                    <div>/month</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="fw-bold">Flexible Desk</h4>
                                    <p class="m-0">Just bring your laptop, pick an open seat, and get to work.</p>
                                </div>
                                <div class="col text-end">
                                    <div>Starts from</div>
                                    <h3 class="fw-bold">Rp. 1.000.000</h3>
                                    <div>/month</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="fw-bold">Dedicated Desk</h4>
                                    <p class="m-0">The perfect office space for every need. We have the perfect desk and
                                        chair for you.</p>
                                </div>
                                <div class="col text-end">
                                    <div>Starts from</div>
                                    <h3 class="fw-bold">Rp. 1.000.000</h3>
                                    <div>/month</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="fw-bold">Event Space</h4>
                                    <p class="m-0">Perfect for seminars, press conferences, and big company gatherings.
                                        Available for up to 500 pax.</p>
                                </div>
                                <div class="col text-end">
                                    <div>Starts from</div>
                                    <h3 class="fw-bold">Rp. 1.000.000</h3>
                                    <div>/hour</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="fw-bold">Meeting Room</h4>
                                    <p class="m-0">Perfect for workshops, classes, and intimate gatherings. Available
                                        for up to 10 pax in strategic locations.</p>
                                </div>
                                <div class="col text-end">
                                    <div>Starts from</div>
                                    <h3 class="fw-bold">Rp. 1.000.000</h3>
                                    <div>/hour</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    @if(count($room->images) > 0)
                        <div class="card">
                            <div class="img-detail-building">
                                <img src="{{
                                    Storage::exists('public/' . $room->images->first()->image) ?
                                    Storage::url($room->images->first()->image) : $room->images->first()->image
                                }}" alt="" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="card-footer p-3 text-center">
                                <i class="bi bi-images fs-5"></i>
                                <span class="ms-2 fs-5">Galleries</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        {{--  End Plans and Pricing  --}}

        {{--  Start Location  --}}
        <section class="mt-5 mb-4">
            <h2 class="fw-bold mb-4">Location</h2>
            <div class="row">
                <div class="col">
                    <p>{{ $room->address }}</p>
                    <p>09:00 AM - 17:30 PM | Monday - Friday</p>
                    <p>09:00 AM - 15:00 PM | Saturday</p>
                    <button class="btn btn-dark py-2 w-100 mt-3">
                        See Direction
                    </button>
                </div>
                <div class="col">
                    <div id="map"></div>
                </div>
            </div>
        </section>
        {{--  End Location  --}}
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <script src="{{ asset('vendor/fontawesome/all.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
            async></script>
    <script>
        let map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
@endpush
