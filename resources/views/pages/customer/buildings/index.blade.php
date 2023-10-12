@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 px-0">
                <header class="bg-light py-3 px-4 position-relative z-1">
                    <form class="d-flex align-items-center h-100" role="search">
                        <div class="input-group mb-3 my-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-search"></i>
                        </span>
                            <input type="text" class="form-control" placeholder="Search building by name"
                                   aria-label="search room"
                                   aria-describedby="search-addon">
                        </div>

                        <div class="dropdown" style="margin-left: 10px;">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Kategori
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Meeting</a></li>
                                <li><a class="dropdown-item" href="#">Event</a></li>
                                <li><a class="dropdown-item" href="#">Photo Shoot</a></li>
                                <li><a class="dropdown-item" href="#">Video Shoot</a></li>
                            </ul>
                        </div>
                    </form>
                </header>
                <div class="row py-4 px-4 gy-4">
                    @foreach($buildings as $building)
                        <div class="col">
                            <div class="card card-building bg-white">
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="overflow-hidden img-building">
                                        <img
                                                src="{{ $building->images[0]->image ?? 'https://source.unsplash.com/320x250?building+' . $loop->index }}"
                                                class="card-img-top img-fluid"
                                                alt="{{ count($building->images) > 0 ? $building->images[0]->image : '' }}">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-secondary">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            4.1/5 (13 Reviews)
                                        </p>
                                        <h5 class="card-title fw-bold">{{ $building->name }}</h5>
                                        <p class="card-text">
                                            {{ $building->address }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-6 px-0">
                <div class="ui vertical stripe segment">
                    <div id="map" class="center-map vh-100"></div>
                </div>
            </div>
        </div>

        {{ $buildings->links('') }}
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        let map = L.map('map').setView([3.576710526204973, 98.67939352943407], 16);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
@endpush
