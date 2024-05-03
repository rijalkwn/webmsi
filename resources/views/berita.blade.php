@extends('template')

@section('konten')
    <section class="page-section bg-light bg-gradient my-3">
        <div class="container mb-5" style="padding-top:1%">
            <h3 class="text-center text-uppercase text-dark fs-2">Berita</h3>
            <hr class="border border-success opacity-50 w-100"></hr>

            <div class="row mt-4">
                @foreach($berita as $item)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('berita.detail', ['id' => $item->id]) }}" class="card-link">
                            <div class="card">
                                <img src="/thumb_berita/{{ $item->thumbnail }}" class="card-img-top" alt="Thumbnail">
                                <div class="card-body">
                                    <h6 class="card-title">{{ Illuminate\Support\Str::of($item->judul)->limit(80, $end='...') }}</h6>
                                    <p class="card-text">{{ Illuminate\Support\Str::of($item->isi)->limit(80, $end='...') }}</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $berita->links() }}
            </div>
        </div>
    </section>
@endsection
