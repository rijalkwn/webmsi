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
            <h1 class="text-dark">INPUT KEPENGURUSAN</h1>
            <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
        </div>
    </div>


    <div class="section pb-5" id="form-inputKepengurusan">
        <div class="container">
            <form ACTION="{{ route('kepengurusan.store') }}" METHOD="POST" name="InputKepengurusan" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="mb-3">
                        <label for="fotoProfil" class="form-label">Upload Gambar :</label>
                        <input class="form-control" type="file" name="fotoProfil"id="fotoProfil">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input class="form-control" name="nama" rows="3">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan :</label><br>
                        <select class="form-select" aria-label="Default select example" name="jabatan">
                            <option value="" selected>--Pilih Jabatan--</option>
                            <option value="Pembina">PEMBINA</option>
                            <option value="Pengawas">PENGAWAS</option>
                            <option value="Ketua">KETUA</option>
                            <option value="Sekretaris">SEKRETARIS</option>
                            <option value="Bendahara">BENDAHARA</option>
                            <option value="Pelaksanastafprogram">PELAKSANA STAF PROGRAM</option>
                            <option value="Inputor">INPUTOR</option>
                            <option value="Finance">FINANCE</option>
                            <option value="Korkad1">KORKAD 1</option>
                            <option value="Korkad2">KORKAD 2</option>
                            <option value="Korkad3">KORKAD 3</option>
                            <option value="Kader">KADER</option>
                        </select>

                    </div>
                    <div class="mb-3 mt-5 text-center">
                        <input class="btn btn-success btn-lg" type="submit" name="storeKepengurusan" value="Tambah!">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
