<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="{{ asset('assets/img/logogratamaIcon.png') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- right menu -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
  <title>PT. Gratama Finance Indonesia</title>
</head>

<!-- navbar -->

<body>
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
          <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('about')) active @endif" href="#"
            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="about">Pengelola</a></li>
            <li><a class="dropdown-item" href="kelola">Tata Kelola</a></li>
            <li><a class="dropdown-item" href="publikasi">Publikasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/laporan') }}">Laporan</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('galeri')) active @endif" href="galeri">Galeri</a>
        </li>
         <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="karir">Karir</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('contact')) active @endif" href="contact">Hubungi Kami</a>
        </li>
      </ul>
    </div>
    <div class="marquee-container ms-auto d-none d-lg-block">
      <div class="marquee">
        <span>Gratama telah berizin dan diawasi oleh OJK.</span>
      </div>
    </div>
  </div>
</nav>

  <!-- teams -->
  <div class="teams bg-light py-8">
    <div class="container">
      <div class="title-container">
      </div>
      <div class="title-container text-center">
        <h2 class="fw-bold">Galeri KSKC</h2>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
          <ul class="list-unstyled d-flex portfolio-filters">
            <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
            <li data-filter=".filter-design" class="py-2 px-4">Video</li>
          </ul>
        </div>
      </div>
      <p class="text-center mt-4"><h5><center>"Bersama, kami membangun kebersamaan dan semangat melalui setiap momen yang berharga."</center></h5></p>
      <div class="row mt-5">
        <div class="col-md-12">
            <div class="mansory portfolio-container">
                <div class="mansory-sizer"></div>
                @foreach ($portfolio as $item)
                <div class="mansory-item m-2 portfolio-item filter-web">
                    <img src="image/{{$item->image}}" alt="" class="img-fluid" oncontextmenu="return false;">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
  </div>

  <style>

    .img-fluid {
        pointer-events: none; /* Mencegah drag-and-drop gambar */
        user-select: none;    /* Mencegah pemilihan gambar */
    }

    .video-gallery {
      background-color: #f8f9fa;
      padding: 40px 0;
      max-width: 1200px;
      margin: auto;
    }

    /* .gallery-title {
      text-align: center;
      font-size: 28px;
      color: #333;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
      padding: 0 15px;
    } */

    .video-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      background: #000;
    }

    .video-item video {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .video-item:hover {
      transform: scale(1.05);
    }

    .video-item:hover video {
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .gallery-container {
      grid-template-columns: 1fr;
      }
    }
  </style>

  <script>
        // Blokir klik kanan di semua gambar
        document.addEventListener('contextmenu', function (e) {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
            }
  </script>

  <div class="video-gallery">
    <div class="title-container text-center">
        <h2 class="fw-bold">Video KSKC</h2>
      </div>
    <div class="gallery-container">
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GoKendari.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Kendari</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/MAP_GFI.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">Gratama Finance Indonesia
          </h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GFI 44_Balikpapan.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Balikpapan</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/samarinda.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Samarinda</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GO_Banjarmasin.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Banjarmasin</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GO_DURI_54.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">
            KSKC Duri</h3>
        </div>
      </div>
    </div>
  </div>  

  <style>
    .teams {
      background-color: #f8f9fa;
      padding: 40px 0;
    }

    .title-container h2 {
      font-size: 28px;
      color: #333;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .portfolio-filters {
      display: flex;
      gap: 15px;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .portfolio-filters li {
      cursor: pointer;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #821131;
      color: white;
      transition: background-color 0.3s ease;
    }

    .portfolio-filters li.filter-active {
      background-color: #821131;
    }

    .portfolio-filters li:hover {
      background-color: #0056b3;
    }

    .mansory {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 15px;
    }

    .mansory-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .mansory-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
      border-radius: 10px;
    }

    .mansory-item:hover {
      transform: scale(1.05);
    }

    .mansory-item:hover img {
      transform: scale(1.1);
    }

    .text-center {
      text-align: center;
    }

    .py-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }

    .mt-4 {
      margin-top: 1.5rem !important;
    }

    .mt-5 {
      margin-top: 3rem !important;
    }

    .bg-light {
      background-color: #f8f9fa !important;
    }

    .container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .video-gallery {
      padding: 20px;
      background-color: #f9f9f9;
    }

    .gallery-title {
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .video-item {
      display: flex;
      justify-content: center;
    }

    .video-card {
      background-color: #fff;
      border-radius: 8px;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .video-card video {
      width: 100%;
      border-radius: 8px;
    } 

    .video-title {
      margin-top: 10px;
      font-size: 16px;
      color: #333;
      font-weight: bold;
    }
  </style>

<div class="bootsidemenu-container bootsidemenu-right" id="sideMenu">
    <!-- Tombol Toggle (bulat) -->
    <button id="toggleMenu" class="toggle-menu">❯❯</button>

    <!-- Item Menu -->
    <a href="https://api.whatsapp.com/send/?phone=6287736879970&text=Hallo++Gratama+Finance+Indonesia&type=phone_number&app_absent=0" target="_blank" id="whatsapp-button" class="bootsidemenu-item">
        <img src="assets/img/wa.png" alt="WhatsApp" class="whatsapp-icon">
    </a>
    <!-- <a href="#" class="bootsidemenu-item">
        <i class="fab fa-instagram fa-2x"></i>
    </a> -->
</div>

  <!-- footer -->
<footer class="mt-5">
  <div class="footer-top bg-dark text-white p-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h4 class="fw-bold">{{$contact->name}}</h4>
          <p>{{$contact->description}}</p>
          <p><strong>Telp :</strong> {{$contact->telepon}}</p>
          <p><strong>Email:</strong> {{$contact->email}}</p>
        </div>
        <div class="col-md-2">
          <h4 class="fw-bold">Tautan</h4>
          <ul class="list-group list-unstyled">
            <li class="list-item">
              <a href="/" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> Beranda
              </a>
            </li>
            <li class="list-item">
              <a href="/about" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> Tentang Kami
              </a>
            </li>
            <li class="list-item">
              <a href="/portfolio" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> Galeri
              </a>
            </li>
            <li class="list-item">
              <a href="/contact" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> Hubungi Kami
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 d-flex flex-column align-items-center">
          <div class="logo-top mb-3">
            <img src="assets/img/logoG2.png" alt="Logo G2" class="img-fluid logo-bordered" style="max-width: 100%;">
          </div>
          <div class="logo-bottom d-flex justify-content-between w-100">
            <img src="assets/img/laps-logo.png" alt="Logo LAPS" class="img-fluid logo-bordered" style="max-width: 48%;">
            <img src="assets/img/logo-appi.png" alt="Logo APPI" class="img-fluid logo-bordered" style="max-width: 48%;">
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
          <div>&copy; 2024 <strong>PT. Gratama Finance Indonesia</strong>. All Rights Reserved.</div>
          <div>Design by me</div>
        </div>
        <div class="col-md-5 text-end">
          <a href="#" class="text-white mx-2">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <!-- Uncomment if you want to add more social links -->
          <!-- <a href="#" class="text-white mx-2">
            <i class="fab fa-youtube fa-2x"></i>
          </a> -->
      </div>
    </div>
  </div>
</div>

<style>
.footer-top {
    background-image: url('assets/img/194.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 20px 40px;
    position: relative;
    z-index: 1; /* Memastikan konten di atas overlay */
}

/* Overlay transparan */
.footer-top::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.85); /* Transparansi 60% */
    z-index: -1; /* Memastikan overlay di bawah konten */
}


.footer-top .container-fluid {
    max-width: 1200px;
    margin: 0 auto; /* Memusatkan kontainer */
}

.footer-top h4, 
.footer-top p {
    margin-bottom: 15px;
    text-align: left; /* Rata kiri */
}

ul.list-group {
    padding-left: 0;
    list-style: none;
    margin: 0;
}

ul.list-group .list-item {
    margin-bottom: 10px;
}

ul.list-group .list-item a {
    color: white;
    text-decoration: none;
}

.logo-top img, 
.logo-bottom img {
    max-width: 100%;
    margin-bottom: 10px;
}

.logo-bottom {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    width: 100%;
}

@media (max-width: 768px) {
    .footer-top .col-md-3, 
    .footer-top .col-md-2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .logo-bottom {
        flex-direction: column;
        align-items: center;
    }
}
</style>
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
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.js"></script>
  <script>
    $(document).ready(function() {
        // Menu awalnya tertutup
        let isMenuOpen = false;

        // Toggle menu ketika tombol di-klik
        $('#toggleMenu').click(function() {
            if (isMenuOpen) {
                // Tutup menu
                $('#sideMenu').removeClass('menu-open');
                isMenuOpen = false;
            } else {
                // Buka menu
                $('#sideMenu').addClass('menu-open');
                isMenuOpen = true;
            }
        });

        // Menutup menu jika klik di luar menu
        $(document).click(function(event) {
            // Jika menu terbuka dan klik di luar menu atau tombol
            if (isMenuOpen && !$(event.target).closest('#sideMenu, #toggleMenu').length) {
                $('#sideMenu').removeClass('menu-open');
                isMenuOpen = false;
            }
        });
    });
</script>

<script>
  $(document).ready(function() {
    // Saat mengarahkan kursor ke menu dropdown
    $('.nav-item.dropdown').hover(
        function() {
            // Slide down pada dropdown-menu
            $(this).find('.dropdown-menu').stop(true, true).slideDown(200);
        },
        function() {
            // Slide up pada dropdown-menu
            $(this).find('.dropdown-menu').stop(true, true).slideUp(200);
        }
    );
});
</script>



</body>

</html>