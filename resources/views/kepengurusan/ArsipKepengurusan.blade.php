@extends('TDashboard')

@section('konten')
<div class="section">
    <div class="container">
        <h1 class="text-dark">Arsip Kepengurusan</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('kepengurusan.create') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
</div>
<div class="container">
    <table class="table text-center table-bordered table-responsive table-fluid" style="width: 100%">
        <thead>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Aksi</th>
        </thead>
        <tbody>
            @if ($kepengurusan->isEmpty())
                <tr>
                    <td colspan="5">Tidak ada data kepengurusan.</td>
                </tr>
            @else
                @foreach ($kepengurusan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <div class="col-sm">
                                <img src="/assets/foto_kepengurusan/{{ $item->fotoprofil }}" class="img-thumbnail" style="width: 150px" alt="">
                            </div>
                        </td>
                        <td>{{ $item->jabatan }}</td>
                        <td class="text-center">
                            {{-- edit dan hapus berita --}}
                            <div class="btn-group" role="group" aria-label="Aksi">
                                <a href="{{ route('kepengurusan.edit', ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('kepengurusan.hapus', ['id' => $item->id]) }}" class="btn btn-danger ms-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {{ $kepengurusan->links()}}
</div>

{{-- Konfirmasi Hapus Kepengurusan
<div class="modal fade" id="HapusKepengurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="{{ route('kepengurusan.hapus', ['id' => $item->id]) }}" id="hapusKepengurusanButton">Hapus</a>
            </div>
        </div>
    </div>
</div> --}}



@endsection
