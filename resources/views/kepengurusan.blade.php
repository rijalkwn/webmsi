<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kepengurusan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/MSI_Logo.png" stylesheet="width: 50px; height: 25%;"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
@extends('template')

@section('konten')
    <section class="page-section bg-light bg-gradient my-3">
        <div class="container mb-5" style="padding-top: 1%">
            <h3 class="text-center text-uppercase text-dark fs-2">Kepengurusan</h3>
            <hr class="border border-success opacity-50 w-100"></hr>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pengurus-inti-tab" data-bs-toggle="tab" data-bs-target="#pengurus-inti" type="button" role="tab" aria-controls="pengurus-inti" aria-selected="true">Pengurus</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="kader-tab" data-bs-toggle="tab" data-bs-target="#kader" type="button" role="tab" aria-controls="kader" aria-selected="false">Kader</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="pengurus-inti" role="tabpanel" aria-labelledby="pengurus-inti-tab">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        @php $counter = 0; @endphp
                        @if ($kepengurusan->isEmpty())
                            <div class="col-md-12">
                                <div class="alert alert-danger text-center" role="alert">
                                    Kepengurusan Belum Tersedia
                                </div>
                            </div>
                        @else
                            @foreach($kepengurusan as $item)
                                @if($item->jabatan != 'Kader')
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="/assets/foto_kepengurusan/{{ $item->fotoprofil }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $item->nama }}</h5>
                                                <p class="card-text">{{ $item->jabatan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @php $counter++; @endphp
                                    @if($counter % 4 == 0)
                                        </div><div class="row row-cols-1 row-cols-md-4 g-4">
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="kader" role="tabpanel" aria-labelledby="kader-tab">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        @php $counter = 0; @endphp
                        @foreach($kepengurusan as $item)
                            @if($item->jabatan == 'Kader')
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="/assets/foto_kepengurusan/{{ $item->fotoprofil }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ Str::title($item->nama) }}</h5>
                                            <p class="card-text">{{ Str::title($item->jabatan) }}</p>


                                        </div>
                                    </div>
                                </div>
                                @php $counter++; @endphp
                                @if($counter % 4 == 0)
                                    </div><div class="row row-cols-1 row-cols-md-4 g-4">
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




