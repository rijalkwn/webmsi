<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MSI Kabupaten Semarang</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/MSI_Logo.png" stylesheet="width: 50px; height: 25%;"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .checked {
        color: orange;
        }
        </style>
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ route('halaman.utama') }}" style="font-size:1.3vw">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-return-left" viewBox="0 0 16 16" style="max-width:100%; width:50px;">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg> kembali 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        
                    </ul>
                </div>
            </div>
        </nav>

    
    <!-- form login -->
    <section class="page-section bg-dark">
        <div class="container" style="padding-top:7%; padding-bottom:10%">
            <div class="row justify-content-center" style="margin-bottom:5%">
                <img src="assets/img/navbar-logo.png" alt="..." style="width:300px; "/>
                <h2 class="masthead-heading text-uppercase text-light text-center" style="padding-top:1%">Kabupaten Semarang</h2>
            </div>

             <!-- Pesan Error -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                    
            <div class="row justify-content-center">
                <div class="col-sm-4 justify-content-center">
                    <form action="ProsesLogin" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Email or username</label>
                            <input type="name" value="{{ Session::get('name') }}" class="form-control" name="name" id="name" placeholder="Username">
                            
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" required class="form-control">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4 text-center" style="padding-top:20%; padding-left:-100%;">
                                <button type="submit" class="btn btn-success btn-xl text-uppercase text-dark">Masuk!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4  bg-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start text-light">Copyright &copy; 2023 Mentari Sehat Indonesia</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter text-dark"></i></a>
                        <a class="btn btn-success btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a class="btn btn-success btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-dark"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-light text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-light text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

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