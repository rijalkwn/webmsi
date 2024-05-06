<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Galeri</title>
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
            <h3 class="text-center text-uppercase text-dark fs-2">galeri</h3>
            <hr class="border border-success opacity-50 w-100"></hr>
            <div class="row">
                @if ($galeri->isEmpty())

                    <div class="col-md-12">
                        <div class="alert alert-danger text-center" role="alert">
                            Galeri Belum Tersedia
                        </div>
                    </div>
                @else
                    @foreach($galeri as $item)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ asset('assets/galeri/'.$item->foto) }}" alt="{{ $item->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ Illuminate\Support\Str::of($item->judul)->limit(80, $end='...') }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $galeri->links() }}
            </div>
        </div>
    </section>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.hidden').style.display = 'none';
});

</script>
