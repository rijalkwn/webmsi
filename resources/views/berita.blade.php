<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Berita</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/MSI_Logo.png" stylesheet="width: 50px; height: 25%;"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
@extends('template')

@section('konten')
    <section class="page-section bg-light bg-gradient my-3">
        <div class="container mb-5" style="padding-top:1%">
            <h3 class="text-center text-uppercase text-dark fs-2">Berita</h3>
            <hr class="border border-success opacity-50 w-100"></hr>

            <div class="row mt-4">
                @if ($berita->isEmpty())
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center" role="alert">
                            Berita Belum Tersedia
                        </div>
                    </div>
                @else
                    @foreach($berita as $item)
                        <div class="col-md-4 mb-4">
                            <a href="{{ route('berita.detail', ['id' => $item->id]) }}" class="card-link">
                                <div class="card">
                                    <img src="/thumb_berita/{{ $item->thumbnail }}" class="card-img-top" alt="Thumbnail">
                                    <div class="card-body">
                                        <h6 class="card-title" style="color: black">{{ Illuminate\Support\Str::of($item->judul)->limit(80, $end='...') }}</h6>
                                        <p class="card-text"style="color: black">{{ Illuminate\Support\Str::of($item->isi)->limit(80, $end='...') }}</p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
                {{ $berita->links() }}
        </div>
    </section>
@endsection
    <script>document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.hidden').style.display = 'none';
    });
    </script>
