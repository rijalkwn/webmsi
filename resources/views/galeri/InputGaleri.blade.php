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
            <h1 class="text-dark">INPUT GALERI</h1>
            <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
        </div>
    </div>


    <div class="section pb-5" id="form-inputGaleri">
        <div class="container">
            <form ACTION="{{ route('galeri.store') }}" METHOD="POST" name="InputGaleri" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="fotoProfil" class="form-label">Upload Foto :</label>
                        <input class="form-control" type="file" name="foto"id="foto">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Judul :</label>
                        <input class="form-control" name="judul" rows="3">
                    </div>
                    <div class="mb-3 mt-5 text-center">
                        <input class="btn btn-success btn-lg" type="submit" name="storeGaleri" value="Tambah!">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
