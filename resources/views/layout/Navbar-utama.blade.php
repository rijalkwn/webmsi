<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('beranda') }}"><img src="assets/img/navbar-logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('kepengurusan') }}">Kepengurusan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('tentang.kami') }}">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-success" href="Login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
