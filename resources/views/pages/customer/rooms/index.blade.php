@extends('layouts.app')

@section('title', 'Cari Kamar')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-5-theme-master/select2-bootstrap-5-theme.min.css')  }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0 overflow-y-auto overflow-x-hidden vh-100">
                <livewire:show-rooms :rooms="$rooms"/>
            </div>
            <div class="col-md-6 px-0">
                <div class="ui vertical stripe segment">
                    <div id="map" class="center-map vh-100"></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $rooms->links() }}
        </div>
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
