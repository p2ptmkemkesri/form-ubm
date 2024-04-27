<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUESIONER SKRINING PERILAKU MEROKOK BAGI ANAK USIA SEKOLAH</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/logo/logo_ptm.png') }}">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('store.form') }}" id="regForm">
                    @csrf
                    <p class="text-center"><img src="{{ asset('frontend/logo/logo_kemenkes_dark.png') }}"
                            style="margin: auto; width: 100px; left: 50%; " alt="logo"></p>
                    <h1 id="register">
                        <strong>FORM SURVEY</strong>
                    </h1>
                    <h4 class="text-center judul">KUESIONER SKRINING PERILAKU MEROKOK BAGI ANAK USIA SEKOLAH</h4>

                    {{-- COLLAPSIBLE --}}
                    <p class="text-center mt-5">
                        <a class="btn btn-warning text-white" data-bs-toggle="collapse" href="#collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Baca Informasi
                        </a>

                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body ">
                            <p class="text-justify">
                                Skrining perilaku merokok bagi anak usia sekolah dilaksanakan untuk melihat gambaran
                                masalah perilaku merokok pada anak usia 10-18 tahun sesuai dengan target indikator RPJMN
                                tahun 2020-2024.

                            <h5>Sasaran :</h5>
                            Skrining perilaku merokok anak usia sekolah 10 - 18 tahun atau kelas 4 s/d 10.

                            <h5 class="mt-3">Metode :</h5> - Wawancara dengan kuesioner skrining perilaku merokok anak
                            sekolah
                            - Pemeriksaan kadar CO pernapasan (menyesuaikan ketersediaan sarana/prasarana)

                            <h5 class="mt-3">Pelaksanaan :</h5>
                            Skrining dilaksanakan bersamaan dengan kegiatan Skrining Anak Sekolah, bekerjasama antara
                            Sekolah (UKS) dan Puskesmas.
                            </p>
                        </div>
                    </div>

                    {{-- STEPS --}}
                    <div class="all-steps" id="all-steps">
                        <span class="step"><i class="fa fa-user"></i></span>
                        <span class="step"><i class="fa fa-map-marker"></i></span>
                        <span class="step"><i class="fa fa-shopping-bag"></i></span>
                        <span class="step"><i class="fa fa-car"></i></span>
                        <span class="step"><i class="fa fa-spotify"></i></span>
                        <span class="step"><i class="fa fa-mobile-phone"></i></span>
                    </div>


                    @yield('main-content')


                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i
                                    class="fa fa-angle-double-left"></i></button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)"><i
                                    class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('frontend/script.js') }}"></script>
</body>

</html>
