<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Perbaikan penulisan shortcut -->
    <link rel="shortcut icon" href="{{ asset('assets/icons/foto.png') }}">

    <title>Pesantren Sumur Bandung</title>

    <!-- Path asset CSS yang benar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> <!-- Perbaikan penulisan path -->

</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Perbaikan penulisan path asset -->
                <img src="{{ asset('assets/icons/foto.png') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-danger">Register</button>
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}

    <section id="hero" class="px-0">
        <div class="container text-center text-white">
           <div class="hero-title"> 
              <div class="hero-text">Selamat Datang <br>Di Pesantren Sumur Bandung</div>
              <h4>Pondok Pesantren Modern Dengan Konsep Islam Kaffah</h4>
           </div>
        </div>
    </section>

    <section id="Program" style="margin-top: -20px">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="bg-white rounded-3 shadow p-3 d-flex  justify-content-between align-items-center">
              <div>
                <h5>Pendidikan <br>Berkualitas</h5>
              </div>
              <img src="{{ asset('assets/images/ic-book.png')}}" height= "55" width="55" alt="">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="bg-white rounded-3 shadow p-3 d-flex  justify-content-between align-items-center">
              <div>
                <h5>Pendidikan <br>Berakhlak</h5>
              </div>
              <img src="{{ asset('assets/images/ic-globe.png')}}" height= "55" width="55" alt="">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between  align-items-center">
              <div>
                <h5>Pendidikan<br> Muamalah</h5>
              </div>
              <img src="{{ asset('assets/images/ic-neraca.png')}}" height= "55" width="55" alt="">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="bg-white rounded-3 shadow p-3 d-flex  justify-content-between align-items-center">
              <div>
                <h5>Pendidikan <br>Teknologi</h5>
              </div>
              <img src="{{ asset('assets/images/ic-komputer.png')}}" height= "55" width="55" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="berita" class="py-5">
      <div class="container py-5">

        <div class="header-berita text-center">
          <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
        </div>

        <div class="row py-5">
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="{{asset('assets/images/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
              <div class="konten-berita">
                <p class="mb-3 text-secondary">23/08/2024</p>
                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Sumur Bandung</h4>
                <p class="text-secondary">#pesantrenmoderen</p>
                <a href="" class="text=decoration-none text-danger">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="{{asset('assets/images/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
              <div class="konten-berita">
                <p class="mb-3 text-secondary">23/08/2024</p>
                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Sumur Bandung</h4>
                <p class="text-secondary">#pesantrenmoderen</p>
                <a href="" class="text=decoration-none text-danger">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="{{asset('assets/images/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
              <div class="konten-berita">
                <p class="mb-3 text-secondary">23/08/2024</p>
                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Sumur Bandung</h4>
                <p class="text-secondary">#pesantrenmoderen</p>
                <a href="" class="text=decoration-none text-danger">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-berita text-center">
          <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
      </div>
    </section>

    {{-- join --}}

    <section id="join" class="py-5">
        <div class="container py-5">
        <div class="row">
          <div class="col-lg-6">
              <div class="d-flex align-items-center mb-3">
                   <div class="stripe me-2"></div>
                   <h5>Daftar Santri</h5>
              </div>
              <h1 class="fw-bold mb-2">Gabung Bersama Kami,Mewujudkan Generasi Rabbani</h1>
              <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolor, eius in quis, soluta  debitis laudantium ea mollitia nam quia voluptatibus cupiditate, velit fugiat architecto rem illum iste? Autem, optio!</p>
              <button class="btn btn-outline-danger">Register</button>
          </div>
          <div class="col-lg-6">
              <img src="{{ asset('assets/images/p3sb.jpeg')}}" width="555" height="350" alt="">
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      const navbar = document.querySelector(".fixed-top")
      window.onscroll = () => {
        if (window.scrollY > 100) {
          navbar.classList.add("scroll-nav-active");
          navbar.classList.add("text-nav-active");
          navbar.classList.remove("navbar-dark");
        } else {
          navbar.classList.remove("scroll-nav-active");
          navbar.classList.add("navbar-dark");
        }
      };
    </script>
</body>
</html>
