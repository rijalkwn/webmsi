<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tentang Kami</title>
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
    <body id="page-top">
        @include('/layout/Navbar-utama')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading" style="margin-bottom:3%;">Tentang Kami!</div>
                <div class="masthead-heading text-uppercase" style="font-size:5vw;">Mentari Sehat Indonesia</div>
                <div class="masthead-heading text-uppercase" style="margin-top:-5%;  font-size:3vw;">Kabupaten Semarang</div>
            </div>
        </header>

        <!-- Tentang MSI -->
        <section class="page-section" id="TentangMSI">
            <div class="container">
                <div>
                    <h2 class="section-heading text-uppercase">tentang yayasan msi</h2>
                    <hr class="border border-success opacity-50 w-50"></hr>
                </div>
                <div>
                    <p class="text-muted">Yayasan Mentari Sehat Indonesia berdiri pada tanggal 22 Juli 2020 di Kota Semarang. Pendirian yayasan ini diprakarsai oleh Prof. Dr. Masrukhi, M.Pd, Supriyanto, M.Pd., Hj. Siti Taqiyah, BA., Noor Diansyah, SKM., dan Chairul Basar, SE. Yayasan ini berdiri sebagai bentuk partisipasi masyarakat di bidang kesehatan, sosial dan pendidikan di Indonesia.</p>
                    <p class="text-muted">Di bidang kesehatan Yayasan Mentari Sehat berperan untuk menggerakkan masyarakat dalam upaya mewujudkan kemandirian dalam mengatasi dan menanggulangi masalah-masalah penyakit menular di masyarakat seperti; TBC, HIVAIDS, Malaria dan lain-lain. Dalam bidang sosial Yayasan Mentari Sehat berperan untuk menggerakkan seluruh komponen masyarakat dalam upaya mendorong perubahan dan perbaikan kehidupan sosial budaya masyarakat. Selanjutnya di dalam bidang pendidikan yayasan ini berperan untuk membantu pemerintah untuk ikut serta mencerdaskan kehidupan bangsa, mendorong masyarakat untuk memperoleh hak pendidikan secara merata dan berkeadilan</p>
                </div>
            </div>

        </section>
        <!-- visi misi -->
        <section class="page-section bg-success" id="visiMisi" style="padding-top:0%; padding-bottom:0%;">
            <div class="container" style="padding-left:0%; margin-left:0%;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="gambar-kotak" style="height:80vh">
                            <img src="../assets/MSI_KABSMRNG.jpg" alt="gambar" class="img-fluid" style="width:100%">
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top:8%; padding-left:10%; margin-top:5%">
                        <h2 class="text-right masthead-subheading text-uppercase" style="font-size:25px">Visi yayasan mentari sehat indonesia</h2>
                        <hr class="border border-dark opacity-50 w-75 float-end"></hr><br><br>
                        <p class="text-right" style="font-size:15px;">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat.</p>

                    </div>
                </div>
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
