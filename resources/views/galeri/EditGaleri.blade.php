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
        <h1 class="text-dark">EDIT GALERI</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
    </div>
</div>

<div class="section pb-5" id="form-editGaleri">
    <div class="container">
        <form action="{{ route('galeri.update', ['id' => $galeri->id]) }}" method="POST" name="EditGaleri" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="mb-3">
                    <label for="fotoProfil" class="form-label">Upload Foto :</label>
                    <input class="form-control" type="file" name="foto" id="foto">
                    <img id="preview" src="/assets/galeri/{{ $galeri->foto }}" alt="Preview" style="width: 200px; display: block;">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Judul :</label>
                    <input class="form-control" name="judul" rows="3" value="{{ $galeri->judul }}">
                </div>
                <div class="mb-3 mt-5 text-center">
                    <input class="btn btn-success btn-lg" type="submit" name="updateGaleri" value="Update">
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
            var input = document.getElementById("foto");
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
                img.src = "/assets/galeri/{{ $galeri->foto }}";
                img.style.display = "block";
            }
        }
    </script>
@endpush
