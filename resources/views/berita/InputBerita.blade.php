@extends('TDashboard')

@section('konten')
@if (session('berhasil'))
<div class="mx-5">
    <div class="alert alert-success" role="alert">
        {{ session('berhasil')}}
    </div>
</div>
@endif

@if (session('gagal'))
<div class="mx-5">
    <div class="alert alert-danger" role="alert">
        {{ session('gagal') }}
    </div>
</div>

@endif

    <div class="section">
        <div class="container">
            <h1 class="text-dark">INPUT BERITA</h1>
            <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
        </div>
    </div>


    <div class="section pb-5" id="form-inputBerita">
        <div class="container">
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="thumbnailBerita" class="form-label">Upload gambar thumbnail :</label>
                        <input class="form-control" type="file" name="thumbnail" id="thumbnail">
                        @error('thumbnail')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="judulBerita" class="form-label">Judul Berita :</label>
                        <input class="form-control" name="judul" rows="3">
                        @error('judul')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="isiBerita" class="form-label">Isi Berita :</label>
                        <textarea class="form-control" name="isi" rows="3"></textarea>
                        @error('isi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 mt-5 text-center">
                        <input class="btn btn-success btn-lg" type="submit" name="storeBerita" value="Posting!">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
