<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PT. Gratama</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top custom-navbar">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand">
        <img src="assets/img/logoG.png" alt="Digital Creative" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-auto" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('/')) active @endif" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown mx-3">
            <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('about')) active @endif" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="about">Pengelola</a></li>
              <li><a class="dropdown-item" href="team">Tata Kelola</a></li>
              <li><a class="dropdown-item" href="testimonials">Publikasi/Karir</a></li>
            </ul>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="services">Layanan</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="portfolio">Galeri</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('contact')) active @endif" href="contact">Hubungi Kami</a>
          </li>
        </ul>
      </div>
      <div class="marquee-container ms-auto">
        <div class="marquee">
          <span>Gratama telah berizin dan diawasi oleh OJK.</span>
        </div>
      </div>
    </div>
  </nav>
  <style>
    .marquee-container {
      overflow: hidden;
      white-space: nowrap;
      width: 300px;
      /* Atur lebar sesuai kebutuhan */
      padding: 5px 0;
    }

    .marquee {
      display: inline-block;
      animation: marquee 15s linear infinite;
      font-weight: light;
      font-size: 14px;
      color: #C62E2E;
      font-style: italic;
      /* Membuat teks menjadi miring */

    }

    @keyframes marquee {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }

    .nav-link.active {
      color: #ff4081;
      border-bottom: 2px solid #ff4081;
    }

    .navbar {
      border-radius: 0 0 100px 0;
      overflow: visible;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .navbar .dropdown-menu {
      border-radius: 0 0 15px 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1050;
    }

    .navbar .dropdown-item:hover {
      background-color: #f0f0f0;
    }

    .navbar-brand img {
      height: 50px;
      width: auto;
      object-fit: contain;
    }

    .custom-navbar {
      height: 80px;
      border-radius: 0 0 100px 0;
      overflow: visible;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .logo {
      height: 50px;
      width: auto;
      object-fit: contain;
    }
  </style>

  <!-- end navbar -->
  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      @foreach ($sliders as $index => $slider)

      <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
        <img src="assets/img/{{$slider->image}}" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>{{$slider->title}}</h5>
          <p>{{$slider->description}}
          </p>
        </div>
      </div>
      @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->
  <!-- Banner End -->

  <!-- about us -->
  <div class="about-us mt-5 about-background">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">TENTANG KAMI</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-6" data-aos="fade-right">
          <center>
            <h3 class="fw-bold about-us-title">
              {{$about->judul}}
            </h3>
          </center>
          <center>
            <p class="fw-bolder mt-4 about-us-subtitle">
              {{$about->subjudul}}
            </p>
          </center>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <p>
            {{$about->deskripsi_1}}
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$about->kelebihan_1}}
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$about->kelebihan_2}}
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$about->kelebihan_3}}
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$about->kelebihan_4}}
            </li>
          </ul>
          <p class="mt-2">
            {{$about->deskripsi_2}}
          </p>
        </div>
      </div>
    </div>
  </div>

  <style>
    .about-background {
      background-image: url('assets/img/bg-about1.jpg');
      /* Ganti dengan path gambar yang sesuai */
      background-size: cover;
      /* Mengatur gambar agar menutupi seluruh area */
      background-position: center;
      /* Memposisikan gambar di tengah */
      padding: 40px 0;
      /* Menambahkan padding untuk ruang atas dan bawah */
      color: black;
      /* Mengatur warna teks agar terlihat di atas background */
      border-radius: 200px 0 130px 0;
      /* Lengkungan bervariasi pada sudut */
      overflow: hidden;
      /* Agar konten tidak keluar dari area lengkung */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      /* Menambahkan bayangan agar terlihat lebih elegan */
    }

    .about-us-title,
    .about-us-subtitle {
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
      /* Menambahkan efek bayangan pada teks agar lebih terbaca */
    }

    .list-group-item {
      color: black;
      /* Mengatur warna item dalam list */
      border-radius: 0 0 20px 20px;
      /* Membuat lengkungan hanya pada sudut bawah */
      overflow: hidden;
      background: linear-gradient(45deg, #f8f9fa, #e9ecef);
      /* Efek gradasi untuk tampilan lebih estetik */
    }

    /* Marquee Styling */
    .marquee {
      background-color: rgba(255, 255, 255, 0.1);
      /* Warna latar belakang marquee agar lebih terlihat */
      padding: 5px;
      /* Menambahkan padding pada marquee */
      border-radius: 5px;
      /* Membuat sudut melengkung */
    }
  </style>
  <!-- end about us -->

  <!-- services -->
  <div class="services mt-5 bg-light py-5">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">PRODUK DAN LAYANAN</h2>
      </div>
      <div class="row mt-5">
        @foreach($services as $service)
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="image/{{$service->image}}" alt="" class="img-fluid" width="80">
              </div>
              <!-- Button untuk mengontrol collapse -->
              <div class="card-title fw-bolder mt-4">
                <a class="text-decoration-none text-dark"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse{{ $service->id }}"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapse{{ $service->id }}">
                  {{$service->title}}
                </a>
              </div>
              <!-- Konten yang akan di-collapse -->
              <div class="collapse mt-3" id="collapse{{ $service->id }}">
                <p class="card-description">
                  {{$service->description}}
                </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- PRODUK DAN LAYANAN -->
      <style>
        .services {
          background-image: url('assets/img/bg-about1.jpg');
          /* Atur URL gambar */
          background-size: cover;
          /* Agar gambar menutupi seluruh area */
          background-position: center;
          /* Fokus pada pusat gambar */
          background-repeat: no-repeat;
          /* Tidak mengulang gambar */
          padding: 50px 0;
          /* Memberi jarak vertikal */
          border-radius: 0 200px 0 130px;
          /* Lengkungan bervariasi pada sudut */
          overflow: hidden;
          /* Agar konten tidak keluar dari area lengkung */
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
          /* Menambahkan bayangan agar terlihat lebih elegan */
        }


        .card {
          background-color: rgba(255, 255, 255, 0.9);
          /* Memberikan latar belakang putih semi-transparan pada card */
          border-radius: 10px;
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .title-container h2 {
          color: black;
          /* Mengubah warna judul menjadi putih */
        }

        .title-container p {
          color: white;
          /* Mengubah warna paragraf menjadi putih */
        }

        /* Jika Anda ingin semua teks dalam section ini putih */
        .text-center {
          color: black;
        }
      </style>

      <!-- Banner -->
      <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <!-- 3000 artinya setiap slide akan berganti setiap 3 detik -->
      </div>
      <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/p3.jpg" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
            <img src="assets/img/p4.jpg" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
            <img src="assets/img/p5.jpg" class="d-block w-100" alt="Slide 3">
          </div>
        </div>
      </div>

      <style>
        #bannerCarousel {
          max-height: 500px;
          /* Sesuaikan dengan tinggi yang diinginkan */
          overflow: hidden;
          border-radius: 15px;
          /* Mengatur sudut lengkung */
          box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.8);
          /* Tambahkan shadow untuk kedalaman */
          transition: transform 0.3s ease-in-out;
          /* Efek transisi */
        }

        #bannerCarousel img {
          object-fit: cover;
          max-height: 500px;
          border-radius: 15px;
          /* Pastikan gambar mengikuti lengkungan bingkai */
        }

        #bannerCarousel:hover {
          transform: scale(1.02);
          /* Membuat sedikit zoom saat di-hover */
        }

        .carousel-inner {
          transition: transform 1.5s ease-in-out;
          /* Memperhalus pergantian antar slide */
        }
      </style>
      <!-- END -->

      <!-- Kalkulator Simulasi Kredit -->
      <div class="credit-calculator mt-5 bg-white p-3 rounded shadow" style="max-width: 400px; margin: auto;">
        <h3 class="text-center mb-4" style="font-size: 1.25rem;">Simulasi Kredit</h3>
        <form id="creditCalculatorForm">
          <div class="mb-2">
            <label for="loanAmount" class="form-label" style="font-size: 0.875rem;">Jumlah Pinjaman:</label>
            <input type="number" class="form-control" id="loanAmount" placeholder="Masukkan jumlah pinjaman" style="font-size: 0.875rem; padding: 0.5rem;">
          </div>
          <div class="mb-2">
            <label for="interestRate" class="form-label" style="font-size: 0.875rem;">Bunga (%):</label>
            <input type="number" class="form-control" id="interestRate" placeholder="Masukkan bunga tahunan" style="font-size: 0.875rem; padding: 0.5rem;">
          </div>
          <div class="mb-2">
            <label for="loanTerm" class="form-label" style="font-size: 0.875rem;">Tenor Pinjaman (bulan):</label>
            <input type="number" class="form-control" id="loanTerm" placeholder="Masukkan tenor pinjaman" style="font-size: 0.875rem; padding: 0.5rem;">
          </div>
          <button type="button" class="btn btn-primary" onclick="calculateLoan()" style="padding: 0.5rem 1rem; font-size: 0.875rem;">Hitung Cicilan</button>
        </form>

        <div class="mt-3">
          <h5 style="font-size: 0.875rem;">Hasil Perhitungan:</h5>
          <p id="result" class="fw-bold" style="font-size: 0.875rem;"></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    function calculateLoan() {
      // Ambil nilai dari input
      var principal = parseFloat(document.getElementById('loanAmount').value);
      var annualInterest = parseFloat(document.getElementById('interestRate').value);
      var months = parseInt(document.getElementById('loanTerm').value);

      if (isNaN(principal) || isNaN(annualInterest) || isNaN(months) || principal <= 0 || annualInterest <= 0 || months <= 0) {
        alert('Silakan masukkan nilai yang valid.');
        return;
      }

      // Hitung bunga bulanan
      var monthlyInterest = annualInterest / 12 / 100;
      // Hitung cicilan bulanan menggunakan rumus annuity
      var monthlyPayment;
      if (monthlyInterest > 0) {
        monthlyPayment = principal * (monthlyInterest * Math.pow(1 + monthlyInterest, months)) / (Math.pow(1 + monthlyInterest, months) - 1);
      } else {
        monthlyPayment = principal / months;
      }
      // Tampilkan hasil
      document.getElementById('result').innerText = 'Cicilan Bulanan: Rp ' + monthlyPayment.toFixed(2);
    }
  </script>


  <!-- end services -->

  <!-- portfolio us -->
  <div class="portfolio-us mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">PORTFOLIO</h2>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
          <ul class="list-unstyled d-flex portfolio-filters">
            <li data-filter="*" class="py-2 px-4 filter-active text-white">FOTO</li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="mansory portfolio-container">
            <div class="mansory-sizer"></div>
            @foreach ($portfolios as $portfolio)
            <div class="mansory-item m-2 portfolio-item filter-web">
              <a href="image/{{$portfolio->image}}" target="_blank">
                <img src="image/{{$portfolio->image}}" alt="" class="img-fluid portfolio-img" />
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- css bg port -->
  <style>
    .portfolio-us {
      background-image: url('assets/img/bg-port3.jpg');
      /* Ganti dengan path gambar Anda */
      background-size: cover;
      /* Mengatur ukuran gambar agar menutupi seluruh div */
      background-position: center;
      /* Menempatkan gambar di tengah */
      background-repeat: no-repeat;
      /* Gambar tidak akan diulang */
      padding: 50px 0;
      /* Tambahkan padding untuk memberi jarak pada konten */
      color: white;
      /* Mengubah warna teks menjadi putih agar kontras dengan background */
    }

    .portfolio-filters li {
      background-color: rgba(0, 0, 0, 0.5);
      /* Background hitam transparan untuk filter */
      color: white;
      /* Warna teks putih */
      border-radius: 5px;
      /* Sudut melengkung untuk filter item */
    }

    .mansory-item {
      background-color: rgba(255, 255, 255, 0.8);
      /* Latar belakang transparan untuk item portfolio */
      border-radius: 10px;
      /* Sudut melengkung untuk gambar */
      padding: 10px;
    }
  </style>
  <!-- end CSS -->
  <!-- end portfolio us -->

  <!-- Bagian Berita -->
  <!-- <div class="news-section mt-5">
    <div class="container">
        <div class="title-container">
            <h2 class="text-center fw-bold">BERITA TERKINI</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <img src="assets/img/fly.png" alt="Berita 1" class="img-fluid">
                    <h5 class="news-title mt-2">Judul Berita 1</h5>
                    <p class="news-summary">Ringkasan berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="link/to/full-article1" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <img src="assets/img/flyer.jpg" alt="Berita 2" class="img-fluid">
                    <h5 class="news-title mt-2">Judul Berita 2</h5>
                    <p class="news-summary">Ringkasan berita 2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="link/to/full-article2" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <img src="assets/img/c5.jpg" alt="Berita 3" class="img-fluid">
                    <h5 class="news-title mt-2">Judul Berita 3</h5>
                    <p class="news-summary">Ringkasan berita 3. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    <a href="link/to/full-article3" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div> -->


  <!-- clients -->
  <div class="clients mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Merek Kendaraan Pembiayaan</h2>
      </div>
      <div class="row mt-5">
        @foreach($clients as $client)
        <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
          <img src="image/{{$client->image}}" class="img-fluid brand-image" alt="" />
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <style>
    .clients {
      /* background-image: url('assets/img/bg-merek.jpg'); */
      /* Ganti dengan path gambar Anda */
      background-size: cover;
      /* Mengatur ukuran gambar agar menutupi seluruh div */
      background-position: center;
      /* Menempatkan gambar di tengah */
      background-repeat: no-repeat;
      /* Gambar tidak akan diulang */
      padding: 50px 0;
      /* Tambahkan padding untuk memberi jarak pada konten */
      color: white;
      /* Mengubah warna teks menjadi putih agar kontras dengan background */
    }
  </style>
  <!-- end clients -->

  <!-- footer -->
  <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5 ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <h4 class="fw-bold">{{$contact->name}}</h2>
              <p>
                {{$contact->description}}
              </p>
              <strong>Phone</strong> : <span>{{$contact->telepon}} </span>
              <br />
              <strong>Email</strong> : <span>{{$contact->email}} </span>
          </div>
          <div class="col-md-2">
            <h4 class="fw-bold">Our Services</h2>
              <ul class="list-group list-unstyled">
                @foreach($services as $service)
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    {{$service->title}}
                  </a>
                </li>
                @endforeach
              </ul>
          </div>
          <div class="col-md-2">
            <h4 class="fw-bold">Useful Links</h2>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="/" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Home
                  </a>
                </li>
                <li class="list-item">
                  <a href="about" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    About Us
                  </a>
                </li>
                <li class="list-item">
                  <a href="services" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Services
                  </a>
                </li>
                <li class="list-item">
                  <a href="portfolio" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Portfolio
                  </a>
                </li>
                <li class="list-item">
                  <a href="contact" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    Contact
                  </a>
                </li>
              </ul>
          </div>
          <div class="col-md-3">
            <h4 class="fw-bold">Join Our Newsletter</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                  Subscribe
                </button>
                <style>
                  .btn-subscribe {
                    color: white;
                    /* Set text color to white */
                  }
                </style>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-down bg-darker text-white px-5 py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="copyright">
              &copy; Copyright <strong>orzkiah</strong>. All Right Reserved
            </div>
            <div class="credits">
              Design by me
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer  -->

  <!-- to top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- end to top -->

  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script>
    function calculateLoan() {
      const loanAmount = parseFloat(document.getElementById("loanAmount").value);
      const interestRate = parseFloat(document.getElementById("interestRate").value);
      const loanTerm = parseFloat(document.getElementById("loanTerm").value);

      if (isNaN(loanAmount) || isNaN(interestRate) || isNaN(loanTerm)) {
        document.getElementById("result").innerText = "Mohon masukkan semua nilai.";
        return;
      }

      const monthlyInterestRate = (interestRate / 100) / 12;
      const numberOfPayments = loanTerm;
      const monthlyPayment = loanAmount * monthlyInterestRate / (1 - (Math.pow(1 + monthlyInterestRate, -numberOfPayments)));

      if (isNaN(monthlyPayment)) {
        document.getElementById("result").innerText = "Perhitungan tidak valid.";
      } else {
        // Format hasil perhitungan dengan titik sebagai pemisah ribuan
        const formattedPayment = monthlyPayment.toLocaleString('id-ID', {
          style: 'currency',
          currency: 'IDR'
        });
        document.getElementById("result").innerText = `Cicilan Bulanan: ${formattedPayment}`;
      }
    }
  </script>
  <!-- nav auto -->
  <!-- <script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
        // Scrolling down - hide navbar
        navbar.style.top = '-80px'; // Sesuaikan dengan tinggi navbar
      } else {
        // Scrolling up - show navbar
        navbar.style.top = '0';
      }
      lastScrollTop = scrollTop;
    });
  </script> -->
</body>

</html>