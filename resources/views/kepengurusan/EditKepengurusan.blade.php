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
        <h1 class="text-dark">EDIT KEPENGURUSAN</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
    </div>
</div>

<div class="section pb-5" id="form-editKepengurusan">
    <div class="container">
        <form action="{{ route('kepengurusan.update', ['id' => $kepengurusan->id]) }}" method="POST" name="EditKepengurusan" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="mb-3">
                    <label for="fotoProfil" class="form-label">Upload Gambar :</label>
                    <input class="form-control" type="file" name="fotoProfil" id="fotoProfil">
                    <img id="preview" src="/assets/foto_kepengurusan/{{ $kepengurusan->foto_profil }}" alt="Preview" style="width: 200px; display: block;">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input class="form-control" name="nama" rows="3" value="{{ $kepengurusan->nama }}">
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan :</label><br>
                    <select class="form-select" aria-label="Default select example" name="jabatan">
                        <option value="" {{ $kepengurusan->jabatan === '' ? 'selected' : '' }}>--Pilih Jabatan--</option>
                        <option value="pembina" {{ $kepengurusan->jabatan === 'pembina' ? 'selected' : '' }}>PEMBINA</option>
                        <option value="pengawas" {{ $kepengurusan->jabatan === 'pengawas' ? 'selected' : '' }}>PENGAWAS</option>
                        <option value="ketua" {{ $kepengurusan->jabatan === 'ketua' ? 'selected' : '' }}>KETUA</option>
                        <option value="sekretaris" {{ $kepengurusan->jabatan === 'sekretaris' ? 'selected' : '' }}>SEKRETARIS</option>
                        <option value="bendahara" {{ $kepengurusan->jabatan === 'bendahara' ? 'selected' : '' }}>BENDAHARA</option>
                        <option value="pelaksanastafprogram" {{ $kepengurusan->jabatan === 'pelaksanastafprogram' ? 'selected' : '' }}>PELAKSANA STAF PROGRAM</option>
                        <option value="inputor" {{ $kepengurusan->jabatan === 'inputor' ? 'selected' : '' }}>INPUTOR</option>
                        <option value="finance" {{ $kepengurusan->jabatan === 'finance' ? 'selected' : '' }}>FINANCE</option>
                        <option value="korkad1" {{ $kepengurusan->jabatan === 'korkad1' ? 'selected' : '' }}>KORKAD 1</option>
                        <option value="korkad2" {{ $kepengurusan->jabatan === 'korkad2' ? 'selected' : '' }}>KORKAD 2</option>
                        <option value="korkad3" {{ $kepengurusan->jabatan === 'korkad3' ? 'selected' : '' }}>KORKAD 3</option>
                        <option value="kader" {{ $kepengurusan->jabatan === 'kader' ? 'selected' : '' }}>KADER</option>


                    </select>
                </div>
                <div class="mb-3 mt-5 text-center">
                    <input class="btn btn-success btn-lg" type="submit" name="updateKepengurusan" value="Update">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        window.onload = function() {
            var img = document.getElementById("preview");
            var input = document.getElementById("fotoProfil");
            if (!input.value) {
                img.style.display = "block";
            } else {
                img.style.display = "none";
            }
        }

        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var img = document.getElementById("preview");
                img.src = reader.result;
                img.style.display = "block";
            };
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            } else {
                var img = document.getElementById("preview");
                img.src = "/assets/foto_kepengurusan/{{ $kepengurusan->foto_profil }}";
                img.style.display = "block";
            }
        }
    </script>
@endpush
