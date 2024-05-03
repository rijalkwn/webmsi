@extends('template')

@section('konten')
    <section class="page-section bg-light bg-gradient my-3">
        <div class="container mb-5" style="padding-top:1%">
            <h3 class="text-center text-uppercase text-dark fs-2">Kepengurusan</h3>
            <hr class="border border-success opacity-50 w-100"></hr>
            <div class="row">
                @foreach($kepengurusan as $item)
                <div class="col-md-6 mb-4 mx-auto">
                    <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/assets/foto_kepengurusan/{{ $item->fotoprofil }}" class="img-thumbnail" style="height: 150px" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">{{$item->nama}}</h6>
                                <p class="card-text">{{$item->jabatan}}</p>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
