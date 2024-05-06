@extends('TDashboard')

@section('konten')
<div class="section">
    <div class="container">
        <h1 class="text-dark">Arsip Galeri</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('galeri.create') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table text-center table-bordered table-responsive table-fluid" style="width: 100%">
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody>
                    @if ($galeri->isEmpty())
                        <tr>
                            <td colspan="5">Tidak ada data galeri.</td>
                        </tr>
                    @else
                        @foreach ($galeri as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->judul}}</td>
                                <td>
                                    <div class="col-sm">
                                        <img src="/assets/galeri/{{ $item->foto }}" class="img-thumbnail" style="width: 150px" alt="">
                                    </div>
                                </td>
                                <td class="text-end">
                                    {{-- edit dan hapus berita --}}
                                    <div class="btn-group" role="group" aria-label="Aksi">
                                        <a href="{{ route('galeri.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('galeri.hapus', ['id' => $item->id]) }}" class="btn btn-danger ms-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $galeri->links()}}
        </div>
    </div>
</div>
@endsection
<script>document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.hidden').style.display = 'none';
});
</script>

