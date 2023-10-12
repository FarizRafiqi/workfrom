@extends('layouts.app')

@push('styles')
    <style>
        .card {
            transition: all 0.3s;
        }

        .card:hover {
            transform: scale(1.15);
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <h1 class="text-center" style="font-weight: bold; margin-top: 75px;">Blog</h1>
        <h5 class="text-center">
            We are a platform that channels office property owners who want to rent out their offices to tenants.</h5>
        <h5 class="text-center">
            we will share various content and information that will be useful for you.
        </h5>
    </div>
    <div class="container-fluid">
        <h4 class="text-center" style="margin-top: 350px;">Our Blog Content</h4>
        <br><br>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded mx-auto hover-zoom" style="width: 18rem;">
                    <a href="https://workfrom.id/blog/business-tips/diskusi-lebih-nyaman-dengan-ruang-rapat-minimalis/">
                        <img src="https://workfrom.id/wp-content/uploads/2023/03/10.-ruang-rapat-minimalis.jpg"
                             class="card-img-top rounded" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Diskusi Lebih Nyaman dengan Interior Ruang Rapat Minimalis</h5>
                        <p class="card-text">Optimalkan diskusi dalam rapat dengan desain interior ruang rapat minimalis
                            dan
                            fungsional yang dapat membuat anda nyaman.</p>
                        <a href="https://workfrom.id/blog/business-tips/diskusi-lebih-nyaman-dengan-ruang-rapat-minimalis/"
                           class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded mx-auto" style="width: 18rem;">
                    <a href="https://workfrom.id/blog/lifestyle/sewa-ruang-kantor-di-jakarta/">
                        <img src="https://workfrom.id/wp-content/uploads/2023/05/pexels-fauxels-3184465-1536x1024.jpg"
                             class="card-img-top rounded" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Tipsnya Sewa Ruang Kantor di Jakarta: Dapatkan Yang Terbaik!</h5>
                        <p class="card-text">Temukan panduan lengkap untuk sewa ruang kantor yang tepat di Jakarta.
                            Mulai
                            dari memilih lokasi hingga cara negoisasi.</p>
                        <a href="https://workfrom.id/blog/lifestyle/sewa-ruang-kantor-di-jakarta/" class="btn btn-dark">Read
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded mx-auto" style="width: 18rem;">
                    <a href="https://workfrom.id/blog/business-tips/5-meeting-room-hotel-terbaik-di-jakarta/">
                        <img src="https://workfrom.id/wp-content/uploads/2023/03/pexels-quark-studio-2507010.jpg"
                             class="card-img-top rounded" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">5 Meeting Room Hotel Terbaik di Jakrta untuk Acara Bisnis</h5>
                        <p class="card-text">Pilih dari 5 hotel terbaik di Jakarta untuk acara bisnismu dengan fasilitas
                            meeting room yang memukau. Temukan tempat ideal untuk rapat dan presentasi.</p>
                        <a href="https://workfrom.id/blog/business-tips/5-meeting-room-hotel-terbaik-di-jakarta/"
                           class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
