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
            <th scope="col">Nomor Inbox</th>
            <th scope="col">Nama Pengirim</th>
            <th scope="col">Isi Pesan</th>
            <th scope="col">Email Pengirim</th>
            <th scope="col">Nomor Pengirim</th>
            <th scope="col">Aksi</th>
        </thead>
        <tbody>
            @foreach ($inbox as $item)
                <tr>
                    <td>{{ $item->id_inbox}}</td>
                    <td>{{ $item->nama_pengirim}}</td>
                    <td>{{ $item->pesan_pengirim }}</td>
                    <td>{{ $item->email_pengirim }}</td>
                    <td>{{ $item->nomor_hp }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ $item->id }}" class="btn btn-warning">Edit</a>
                            <a href="{{ $item->id }}" class="btn btn-danger ms-3" style="margin-left:3%">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $inbox->links()}}
</div>

@endsection
