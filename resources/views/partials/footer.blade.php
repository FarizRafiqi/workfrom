<footer class="text-center bg-dark text-lg-start text-muted">
    <section class="container text-center text-md-start">
        <div class="row pt-5">
            <div class="col-md-4 col-lg-3 col-xl-3 mb-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/Logo-WF-White.png') }}" alt="logo" width="280">
                </a>

                <p class="text-white mt-5">
                    Komp. Ruko Centre Point Medan Jalan Timor Blok G No. III/IV 2nd Floor, Gang
                    Buntu, Medan Timur, Medan City, North Sumatra 20231
                </p>

                <p class="text-white">
                    (+6261) 805 109 77
                </p>
            </div>

            <div class="col mb-4 offset-md-3">
                <h6 class="text-uppercase fw-bold mb-4 text-white">Mitra</h6>

                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Clapham</a>
                </p>

                <p>
                    <a href="#" class="text-white-50 text-decoration-none">The 101</a>
                </p>

                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Yafurni</a>
                </p>

                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Kalingga</a>
                </p>

                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Spasi</a>
                </p>
            </div>

            <div class="col mb-4">
                <h6 class="text-uppercase fw-bold mb-4 text-white">
                    Use Case
                </h6>
                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Meeting</a>
                </p>
                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Event</a>
                </p>
                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Photo Shoot</a>
                </p>
                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Video Shoot</a>
                </p>
            </div>

            <div class="col mb-4">
                <h6 class="text-uppercase fw-bold mb-4 text-white">
                    Company
                </h6>
                <p>
                    <a href="#" class="text-white-50 text-decoration-none">Contact Us</a>
                </p>
                <p>
                    <a href="{{ route('blog') }}" class="text-white-50 text-decoration-none">Blog</a>
                </p>
            </div>
        </div>
    </section>

    <div class="text-center p-4 text-white">
        © {{ date('Y') }} Copyright Workfrom.id
    </div>
</footer>
