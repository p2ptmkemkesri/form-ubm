<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Survey UBM</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <h4 class="text-center judul">Skrining Merokok Anak Sekolah</h4>
                    {{-- thanks message --}}
                    <div class="text-center" id="text-message">
                        {{-- <img src="{{asset('frontend/okay.png')}}" width="100"
                            class="mb-4"> --}}
                        <img src="{{ asset('frontend/logo/icons8-double-tick.gif') }}" width="70" class="mb-4">
                        <h3 class="judul">Data terkirim!</h3> <span>Terima kasih atas respon yang diberikan, sangat
                            membantu kami.</span>

                        <br>
                        <br>
                        <a href="{{ route('show.form') }}">Kirim tanggapan lain</a>
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

    <script src="{{ asset('frontend/script.js') }}"></script>
</body>

</html>
