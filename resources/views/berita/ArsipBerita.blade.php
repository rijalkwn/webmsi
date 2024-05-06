@extends('TDashboard')

@section('konten')
<div class="section">
    <div class="container">
        <h1 class="text-dark">Arsip Berita</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
</div>
    <div class="container">
        <table class="table text-center table-bordered table-responsive">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Isi Berita</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Aksi</th>
            </thead>
            <tbody>
                @if ($berita->isEmpty())
                    <tr>
                        <td colspan="5">Tidak ada data berita.</td>
                    </tr>
                @else
                    @foreach ($berita as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->judul}}</td>
                            <td>{{ Str::limit($item->isi, 50) }}</td>
                            <td>
                                <div class="col-sm">
                                    <img src="/thumb_berita/{{ $item->thumbnail }}" class="img-thumbnail" style="width: 150px" alt="">
                                </div>
                            </td>
                            <td class="text-end">
                                {{-- edit dan hapus berita --}}
                                <div class="btn-group" role="group" aria-label="Aksi">
                                    <a href="{{ route('berita.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('berita.hapus', ['id' => $item->id]) }}" class="btn btn-danger ms-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $berita->links()}}
    </div>



@endsection
<script>document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.hidden').style.display = 'none';
});
</script>
