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
                    <div class="col">
                        <div class="card card-building bg-white">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="overflow-hidden img-building">
                                    <img src="https://source.unsplash.com/320x250?building"
                                         class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="text-secondary">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        4.1/5 (13 Reviews)
                                    </p>
                                    <h5 class="card-title fw-bold">Clapham</h5>
                                    <p class="card-text">
                                        Komp. Ruko Centre Point Medan Jalan Timor Blok G No. III/IV 2nd Floor, Gang
                                        Buntu, Medan Timur, Medan City, North Sumatra 20231
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-building bg-white">
                            <a href="" class="text-decoration-none text-dark">
                                <div class="overflow-hidden img-building">
                                    <img src="https://source.unsplash.com/320x250?building+2"
                                         class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="text-secondary">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        4.1/5 (13 Reviews)
                                    </p>
                                    <h5 class="card-title fw-bold">101</h5>
                                    <p class="card-text">
                                        Kawasan, Jl. Mega Kuningan Barat Jl. DR. Ide Anak Agung Gde Agung No.1,
                                        RT.5/RW.2, Kuningan, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan,
                                        Daerah Khusus Ibukota Jakarta 12950
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-building bg-white">
                            <a href="" class="text-decoration-none text-dark">
                                <div class="overflow-hidden img-building">
                                    <img src="https://source.unsplash.com/320x250?building+3"
                                         class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="text-secondary">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        4.1/5 (13 Reviews)
                                    </p>
                                    <h5 class="card-title fw-bold">Yafurni</h5>
                                    <p class="card-text">
                                        Jl. Iskandar Muda No.7, Petisah Hulu, Kec. Medan Baru, Kota Medan, Sumatera
                                        Utara 20153
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-building bg-white">
                            <a href="" class="text-decoration-none text-dark">
                                <div class="overflow-hidden img-building">
                                    <img src="https://source.unsplash.com/320x250?building+4"
                                         class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="text-secondary">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        4.1/5 (13 Reviews)
                                    </p>
                                    <h5 class="card-title fw-bold">Kalingga</h5>
                                    <p class="card-text">
                                        Jl. Kalingga No.14, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera
                                        Utara 20112
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{--                    <div class="col">--}}
                    {{--                        <div class="card card-building bg-white">--}}
                    {{--                            <a href="" class="text-decoration-none text-dark">--}}
                    {{--                                <div class="overflow-hidden img-building">--}}
                    {{--                                    <img src="https://source.unsplash.com/320x250?building+5"--}}
                    {{--                                         class="card-img-top img-fluid" alt="...">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="card-body">--}}
                    {{--                                    <p class="text-secondary">--}}
                    {{--                                        <i class="bi bi-star-fill text-warning"></i>--}}
                    {{--                                        4.1/5 (13 Reviews)--}}
                    {{--                                    </p>--}}
                    {{--                                    <h5 class="card-title fw-bold">Spasi</h5>--}}
                    {{--                                    <p class="card-text">--}}
                    {{--                                        Komplek Multatuli Indah, Jl. Multatuli No.30-31, Hamdan, Kec. Medan Maimun, Kota--}}
                    {{--                                        Medan, Sumatera Utara 20212--}}
                    {{--                                    </p>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="col-6 px-0">
                <div class="ui vertical stripe segment">
                    <div id="map" class="center-map vh-100"></div>
                </div>
            </div>
        </div>

        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
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
