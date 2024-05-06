@extends('TDashboard')

@section('konten')
<div class="section">
    <div class="container">
        <h1 class="text-dark">Detail Pesan Masuk</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
    </div>
</div>

<div class="container">
    <form ACTION="" id="form-KirimPesan" method="" name="kirimPesan">
        @csrf
        <div class="row align-items-stretch mb-2">
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="nama">Nama</label>
                    <input disabled class="form-control" id="nama" name="nama" type="text" placeholder="Nama Anda *" required="required" data-validation-required-message="Please enter your name." value="{{ $kontak->nama }}" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input disabled class="form-control" id="email" name="email" type="email" placeholder="Email Anda *" required="required" data-validation-required-message="Please enter your email address." value="{{ $kontak->email }}" />
                    <p class="help-block text-danger"></p>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="phone">Nomor WA</label>
                    <input disabled class="form-control" id="nomor_hp" name="nomor_hp" type="tel" placeholder="Nomor Telepon Anda *" required="required" data-validation-required-message="Please enter your phone number." value="{{ $kontak->nomor_hp }}" />
                    <p class="help-block text-danger"></p>
                </div>
                {{-- alamat --}}
                <div class="form-group mb-2">
                    <label for="alamat">Alamat</label>
                    <input disabled class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat Anda *" required="required" data-validation-required-message="Please enter your address." value="{{ $kontak->alamat }}" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="pesan">Pesan</label>
            <textarea disabled class="form-control" id="pesan" name="pesan" placeholder="Pesan Anda *" required="required" data-validation-required-message="Please enter a message.">{{ $kontak->pesan }}</textarea>
            <p class="help-block text-danger"></p>
        </div>
        {{-- kembali --}}
        <div class="form-group mb-2">
            <a href="{{ route('ArsipKontak') }}" class="btn btn-primary">Kembali</a>
            <a href="https://wa.me/{{ $kontak->nomor_hp }}" class="btn btn-success" target="_blank">Balas via WhatsApp</a>
        </div>

    </form>
</div>

@endsection
