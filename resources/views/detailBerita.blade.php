<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>$berita->judul</title>
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

<body>

    @include('/layout/Navbar-utama')


        <!-- Masthead-->
        {{-- <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" style="margin-bottom:3%;"></div>
                <div class="masthead-heading text-uppercase" style="margin-top:-5%;  font-size:3vw;">Kabupaten Semarang</div>
            </div>
        </header> --}}
        <section class="page-section bg-light bg-gradient my-3">
            <div class="container mb-1" style="padding-top:1%">
                <div class="row mt-4">
                    <div class="col-md-12 mb-4">
                        <div class="card p-3">
                            <h3 class="text-center text-uppercase text-dark fs-2">{{ $berita->judul }}</h3>
                            <hr class="border border-success opacity-50 w-100"></hr>
                            <img src="/thumb_berita/{{ $berita->thumbnail }}" class="card-img-top mx-auto" alt="Thumbnail" style="height: 300px; width:500px">
                            <div class="card-body">
                                <p class="card-text">{{ $berita->isi }}</p><br><br><br>
                                <p><small>Diposting pada: {{ $berita->created_at->format('l, j F Y') }}</small></p>
                            </div>
                        </div>
                        {{-- back --}}
                        <div class="d-flex justify-content-start mt-4">
                            <a href="{{ route('berita') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer-->
   <!-- Footer-->
   @include('/layout/footer')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
