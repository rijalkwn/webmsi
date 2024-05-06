@extends('TDashboard')

@section('konten')
<div class="section">
    <div class="container">
        <h1 class="text-dark">Daftar Pesan Masuk</h1>
        <hr class="border border-dark opacity-50 w-100 float-end"></hr><br><br>
    </div>
</div>

<div class="container">
    <table class="table text-center table-bordered table-responsive">
        <thead>
            <th scope="col">Nama Pengirim</th>
            <th scope="col">Email Pengirim</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Alamat Pengirim</th>
            <th scope="col">Pesan Pengirim</th>
            <th scope="col">Aksi</th>
        </thead>
        <tbody>
            @foreach ($kontak as $item)
                <tr>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->nomor_hp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->pesan }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Aksi">
                            <a href="{{ route('kontak.detail', ['id' => $item->id]) }}" class="btn btn-warning">Lihat</a>
                            <a href="{{ route('kontak.hapus', ['id' => $item->id]) }}" class="btn btn-danger ms-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $kontak->links()}}
</div>

@endsection
<script>document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.hidden').style.display = 'none';
});
</script>
