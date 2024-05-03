<!DOCTYPE html>
<html lang="en">

<head>
    <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kontak</title>
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

    @include('layout/Navbar-utama')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" style="margin-bottom:3%;"></div>
                <div class="masthead-heading text-uppercase" style="font-size:5vw;">Berita & Kegiatan</div>
                <div class="masthead-heading text-uppercase" style="margin-top:-5%;  font-size:3vw;">Kabupaten Semarang</div>
            </div>
        </header>

        @yield('konten')


     <!-- Contact-->
     <section class="page-section" id="">
        @if(session('berhasil'))
        <div class="mx-5">
            <div class="alert alert-success" role="alert">
                {{ session('berhasil')}}
            </div>
        </div>
        @endif

        @if(session('gagal'))
        <div class="mx-5">
            <div class="alert alert-danger" role="alert">
                {{ session('gagal') }}
            </div>
        </div>
        @endif
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontak Kami!</h2>
                    <h3 class="section-subheading text-muted">Silahkan isi form di bawah ini untuk mengirim pesan kepada kami.</h3>
                </div>

                <form ACTION="kirimPesan" id="form-KirimPesan" method="POST" name="kirimPesan">
                    @csrf
                    <div class="row align-items-stretch mb-2">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="nama">Nama</label>
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Anda *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email Anda *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="phone">Nomor Telepon</label>
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Nomor Telepon Anda *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                            {{-- alamat --}}
                            <div class="form-group mb-2">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat Anda *" required="required" data-validation-required-message="Please enter your address." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan Anda *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-success btn-xl text-uppercase" id="sendMessageButton" type="submit">Kirim Pesan</button>
                    </div>
                </form>
                {{-- pesan akan segera dibalas
                <div class="text-center mb-5">
                    <p class="text-warning">Pesan Anda akan segera dibalas oleh kami. Terima kasih!</p>
                </div> --}}
            </div>
        </section>

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
