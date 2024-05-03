@extends('TDashboard')

@section('konten')
@if (session('message'))
    <div class="mx-5">
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
        </div>
    </div>
@endif
    <h1>Halaman Utama</h1>
@endsection