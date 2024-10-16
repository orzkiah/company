<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Detail - News Title 1</title>
  <link rel="stylesheet" href="path/to/your/css/styles.css"> <!-- Link to your CSS file -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- AOS -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    .news-detail {
      background-color: #f9f9f9;
    }

    .news-title {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .news-date {
      font-size: 1rem;
      color: #666;
      margin-bottom: 1rem;
    }

    .news-image {
      max-width: 100%;
      height: auto;
    }

    .news-body {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 1rem;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
    <div class="container">
      <a class="navbar-brand">
        <img src="assets/img/logoG.png" alt="Digital Creative" width="200" height="50"
          class="d-inline-block mt--2 me-2 bg-color">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-3">
            <a class="nav-link fw-bolder @if(Request::is('/')) active @endif" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown ms-3">
            <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('about')) active @endif" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="about">Pengelola</a></li>
              <li><a class="dropdown-item" href="team">Tata Kelola</a></li>
              <li><a class="dropdown-item" href="testimonials">Berita/Karir</a></li>
            </ul>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="services">Layanan</a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="portfolio">Galeri</a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link fw-bolder @if(Request::is('contact')) active @endif" href="contact">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    .nav-link.active {
      color: #ff4081;
      /* Warna pink misalnya */
      border-bottom: 2px solid #ff4081;
      /* Garis bawah untuk elemen yang aktif */
    }

    .navbar {
      border-radius: 0 0 100px 0;
      /* Membuat lengkungan berbeda pada setiap sudut */
      overflow: visible;
      /* Mengubah overflow agar dropdown tidak terpotong */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      /* Memberikan bayangan halus untuk efek kedalaman */
      z-index: 1000;
      /* Meningkatkan z-index agar navbar berada di atas elemen lain */
    }

    .navbar .dropdown-menu {
      border-radius: 0 0 15px 15px;
      /* Memberikan lengkungan pada dropdown agar serasi dengan navbar */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      /* Memberikan bayangan agar terlihat elegan */
      z-index: 1050;
      /* Pastikan dropdown memiliki z-index lebih tinggi dari navbar */
    }
  </style>

  <!-- News Detail Section -->
  <section class="news-detail py-5 mt-5">
    <div class="container">
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/news">News</a></li>
          <li class="breadcrumb-item active" aria-current="page">News Title 1</li>
        </ol>
      </nav>

      <!-- News Detail Content -->
      <div class="news-content">
        <h1 class="news-title fw-bold">News Title 1</h1>
        <p class="news-date">September 1, 2024</p>
        <img src="assets/img/news1.jpg" alt="News Title 1" class="img-fluid mb-4 news-image">
        <p class="news-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <p class="news-body">
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <!-- Add more paragraphs as needed -->
      </div>

      <!-- Back to News List Button -->
      <div class="text-center mt-4">
        <a href="/news" class="btn btn-primary">Back to News List</a>
      </div>
    </div>
  </section>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js">
  </script>
  <script>
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
  </script>
</body>

</html>