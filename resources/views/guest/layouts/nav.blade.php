<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('guest.home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>BAITUL MAL DESA KLANGENAN</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('guest.home') }}">Beranda</a></li>
                <li><a href="{{ route('guest.home') }}">Berita</a></li>
                <li><a href="{{ route('guest.home') }}">Galeri</a></li>
                <li><a href="{{ route('guest.home') }}">Hubungi Kami</a></li>
                <li><a href="{{ route('guest.home') }}">Tentang Kami</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav><!-- .navbar -->


        <i class="bi bi-list mobile-nav-toggle"></i>
    </div>

</header>
