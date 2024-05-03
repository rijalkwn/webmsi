@extends('template')

@section('konten')
    <section class="page-section bg-light bg-gradient my-3">
        <div class="container mb-5" style="padding-top:1%">
            <h3 class="text-center text-uppercase text-dark fs-2">{{ $berita->judul }}</h3>
            <hr class="border border-success opacity-50 w-100"></hr>

            <div class="row mt-4">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <img src="/thumb_berita/{{ $berita->thumbnail }}" class="card-img-top" alt="Thumbnail">
                        <div class="card-body">
                            <p class="card-text">{{ $berita->isi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
