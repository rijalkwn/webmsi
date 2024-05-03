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
        <h1 class="text-dark">EDIT BERITA</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
    </div>
</div>

<div class="section pb-5" id="form-editBerita">
    <div class="container">
        <form action="{{ route('berita.update', ['id' => $berita->id]) }}" method="POST" name="EditBerita" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="mb-3">
                    <label for="thumbnailBerita" class="form-label">Upload gambar thumbnail :</label>
                    <input class="form-control" type="file" name="thumbnail" id="thumbnail" onchange="previewImage(event)">
                    <img id="preview" src="/thumb_berita/{{ $berita->thumbnail }}" alt="Preview" style="width: 200px; display: block;">
                </div>


                <div class="mb-3">
                    <label for="judulBerita" class="form-label">Judul Berita :</label>
                    <textarea class="form-control" name="JudulBerita" rows="3">{{ $berita->judul }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="isiBerita" class="form-label">Isi Berita :</label>
                    <textarea class="form-control" name="IsiBerita" rows="3">{{ $berita->isi }}</textarea>
                </div>
                <div class="mb-3 mt-5 text-center">
                    <input class="btn btn-success btn-lg" type="submit" name="updateBerita" value="Update">
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
            var input = document.getElementById("thumbnail");
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
                img.src = "/thumb_berita/{{ $berita->thumbnail }}";
                img.style.display = "block";
            }
        }
    </script>
@endpush

