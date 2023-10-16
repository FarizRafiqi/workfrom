@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-white">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">{{ __('Name') }}</label>
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">{{ __('Email Address') }}</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label fw-bold">{{ __('Phone Number') }}</label>
                                <input type="tel" id="phone_number"
                                       class="form-control @error('phone_number') is-invalid @enderror"
                                       name="phone_number" value="{{ old('phone_number') }}">

                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password"
                                       class="form-label fw-bold">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('register_as') is-invalid @enderror" type="radio" name="register_as" id="asCustomer"
                                           value="customer">
                                    <label class="form-check-label" for="asCustomer">Register as <a href="#"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-title="Individu atau grup yang memesan Ruang atau Meeting Package">Customer</a></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('register_as') is-invalid @enderror" type="radio" name="register_as" id="asOwner"
                                           value="owner">
                                    <label class="form-check-label" for="asOwner">Register as <a href="#"
                                                                                                 data-bs-toggle="tooltip"
                                                                                                 data-bs-title="Adalah pemilik gedung atau ruang yang mendaftarkan gedung atau ruang di website ini">Owner</a></label>
                                </div>
                                @error('register_as')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="row row-cols-2 g-3 align-items-center">
                                    <div class="col-12">
                                        <div class="form-check @error('is_agree_tos') is-invalid @enderror">
                                            <input class="form-check-input" type="checkbox" name="is_agree_tos" value="true"
                                                   id="isAgreeTOS">

                                            <label class="form-check-label" for="isAgreeTOS">
                                                I agree all statements in <a href="#" class="text-success"
                                                                             data-bs-toggle="modal"
                                                                             data-bs-target="#termsOfService">Terms of
                                                    Service</a>
                                            </label>
                                        </div>

                                        @error('is_agree_tos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark w-100 py-2">
                                {{ __('Register') }}
                            </button>

                            <a class="btn btn-link text-success ps-0" href="{{ route('login') }}">
                                {{ __('Already have an account? Login') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Terms of Service -->
    <div class="modal fade" id="termsOfService" tabindex="-1" aria-labelledby="termsOfService" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="termsOfService">Syarat dan Ketentuan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-12">1. Pembuka</dt>
                        <dd class="col-sm-12">
                            Syarat dan Ketentuan dibawah ini harus dibaca sebelum menggunakan situs ini. Penggunaan
                            situs ini mengindikasikan penerimaan dan kepatuhan kepada syarat dan ketentuan di bawah ini.
                            Syarat dan Ketentuan berikut ini berlaku untuk penggunaan situs Workfrom (website) dan
                            melalui layanan Workfrom lainnya. Dengan mengakses, menggunakan, dan
                            berpatisipasi dalam layanan kami maka anda (“Pengguna” baik “Tamu” maupun “Host”) setuju
                            untuk terikat terhadap Syarat dan Ketentuan di bawah ini dan syarat dan ketentuan lainnya
                            yang berkaitan dengan situs ini, termasuk namun tidak terbatas pada kerahasiaan dan FAQ,
                            yang merupakan bagian yang tidak dapat terpisahkan dari Syarat dan Ketentuan.
                        </dd>

                        <dt class="col-sm-12">2. Ketentuan Umum</dt>
                        <dd class="col-sm-12">
                            <p>
                                Workfrom merupakan pedagang perantara, hubungan Workfrom dengan Host bukan merupakan
                                hubungan
                                kemitraan, keagenan, atau distributor. Workfrom adalah Perusahaan Teknologi dan bukan
                                Perusahaan Akomodasi Hotel, Penyewaan Ruangan, ataupun Perusahaan Event Organizer.
                                Workfrom
                                hanya memiliki kewenangan untuk melakukan pemasaran Ruangan dan Meeting Package milik
                                Host. Dengan menggunakan Aplikasi Kami Anda setuju untuk memberikan segala informasi
                                terkini yang diminta dengan sebenar-benarnya, segala kesalahan data yang Anda berikan
                                sepenuhnya bukanlah tanggung jawab kami. Kami dapat meminta pertanggungjawaban Anda atas
                                kerugian yang diakibatkan karena kesalahan data yang Anda berikan.
                            </p>
                            <p>
                                Workfrom tidak bertanggungjawab atas kerugian Tamu yang disebabkan oleh Host. Workfrom
                                tidak
                                bertanggungjawab atas kerugian Tamu yang dialami di dalam Ruangan Host yang sedang
                                disewa. Workfrom tidak bertanggungjawab atas kerusakan fasilitas milik Host yang
                                disebabkan
                                kegiatan sewa menyewa melalui Workfrom. Dengan menggunakan Aplikasi Workfrom maka Anda
                                setuju
                                untuk bertanggungjawab sepenuhnya atas segala kerusakan pada sistem gawai/komputer Anda
                                atau hilangnya data Anda yang diakibatkan penggunaan aplikasi kami. Anda memahami dan
                                setuju bahwa penggunaan aplikasi dan transaksi yang anda lakukan sepenuhnya adalah
                                resiko Anda sendiri. Segala ganti rugi atau garansi apapun yang disediakan Pihak Host
                                yang diakibatkan oleh kesalahan Pihak Host sepenuhnya adalah tanggung jawab Host dan
                                bukan merupakan tanggung jawab kami.
                            </p>
                            <p>
                                Workfrom senantiasa selalu menghargai dan memberikan penghargaan kepada pengguna
                                Workfrom
                                dengan memberikan promosi-promosi sesuai dengan kebijakan kami. Terhadap promosi-promosi
                                tersebut Anda dilarang menjual, menukar, atau mengalihkan promosi tersebut dengan uang
                                atau barang apapun.
                            </p>
                        </dd>
                    </dl>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
