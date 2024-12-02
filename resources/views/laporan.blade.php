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
  <title>PT. Gratama Finance Indonesia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Tambahkan CSS dan JS slick carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <!-- right menu -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top custom-navbar">
  <div class="container d-flex align-items-center">
    <a href="login" class="navbar-brand">
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
            <li><a class="dropdown-item" href="{{ url('/about') }}">Pengelola</a></li>
            <li><a class="dropdown-item" href="{{ url('/kelola') }}">Tata Kelola</a></li>
            <li><a class="dropdown-item" href="{{ url('/publikasi') }}">Publikasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/laporan') }}">Laporan</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="{{ url('/galeri') }}">Galeri</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="{{ url('/karir') }}">Karir</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('contact')) active @endif" href="{{ url('/contact') }}">Hubungi Kami</a>
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

        <div class="title-container text-center">
            <h1 class="fw-bold">LAPORAN</h1>
        </div>
        <div class="title-container text-center">
            <h2 class="fw-bold">LAPORAN</h2>
        </div>
        <div id="content-container" class="container">
        <div class="centered-logos-container">
        <div class="centered-logos-container">
    <!-- Logo dan Judul 1 -->
        <div class="logo-icon-container" onclick="openPdfModal(1)">
            <img src="assets/img/inves.png" alt="PDF Reports" class="logo-icon">
            <h4 class="logo-title">HUBUNGAN INVESTOR</h4>
        </div>

        <!-- Logo dan Judul 2 -->
        <div class="logo-icon-container" onclick="openPdfModal(2)">
            <img src="assets/img/keuangan.png" alt="PDF Reports" class="logo-icon">
            <h4 class="logo-title">LAPORAN KEUANGAN</h4>
        </div>

    <!-- Logo dan Judul 3 -->
    <!-- <div class="logo-icon-container" onclick="openPdfModal(3)">
        <img src="assets/img/ojk.png" alt="PDF Reports" class="logo-icon">
        <h4 class="logo-title">LAPORAN OJK</h4>
    </div> -->
        </div>

<!-- Modal Konten Laporan PDF -->
<div id="pdfModal1" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal(1)">&times;</span>
        <div class="pdf-button-container">
            <h4 class="color">Hubungan Investor</h4>
            <a href="https://gratama-finance.co.id/pdf/Laporan%20keberlanjutan%202021.pdf" class="pdf-download-btn">Download Laporan 2021</a>
            <a href="https://gratama-finance.co.id/pdf/RAKB%202022.pdf" class="pdf-download-btn">Download Laporan 2022</a>
            <a href="https://gratama-finance.co.id/pdf/RAKB%202023%20Pembiayaan%20Kendaraan%20Bertenaga%20Listrik.pdf" class="pdf-download-btn">Download Laporan 2023</a>
        </div>
    </div>
</div>

<div id="pdfModal2" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal(2)">&times;</span>
        <div class="pdf-button-container">
            <h4 class="color">Laporan Keuangan</h4>
            <a href="https://gratama-finance.co.id/pdf/RAKB%202022.pdf" class="pdf-download-btn">Download Laporan 2022</a>
        </div>
    </div>
</div>
 </div>
</div>

<!-- <div id="pdfModal3" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal(3)">&times;</span>
        <div class="pdf-button-container">
            <h4 class="color">Laporan OJK</h4>
            <a href="https://gratama-finance.co.id/pdf/RAKB%202023%20Pembiayaan%20Kendaraan%20Bertenaga%20Listrik.pdf" class="pdf-download-btn">Download Laporan 2023</a>
        </div>
    </div>
</div> -->

<!-- Style -->
  <style>
      /* Jarak spesifik untuk elemen setelah navbar */
  #content-container {
    margin-top: 100px; /* Berikan jarak sesuai keinginan */
  }

  /* Warna teks */
  .color {
    color: #A91D3A;
  }
  /* Kontainer logo berpusat */
  .centered-logos-container {
    display: flex;
    justify-content: center;
    gap: 50px; /* Mengatur jarak antar logo */
    margin-bottom: 50px;
    flex-wrap: wrap;
    padding: 20px; /* Memberi padding keseluruhan */
  }

  /* Kontainer setiap logo dan judul */
  .logo-icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 20px; /* Menambahkan jarak di sekitar logo */
    padding: 10px;
    border-radius: 8px;
  }

  /* Efek saat hover pada logo */
  .logo-icon-container:hover {
    transform: scale(1.1);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  }

  .logo-icon {
    width: 150px;
    height: 150px;
    transition: transform 0.3s ease;
  }

  .logo-icon-container:hover .logo-icon {
    transform: rotate(15deg);
  }

  .logo-title {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-top: 10px;
    text-align: center;
  }

  /* Modal */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
    background-color: #fff;
    margin: auto;
    padding: 20px 30px;
    border-radius: 8px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    position: relative;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  }

  .close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #A91D3A;
    cursor: pointer;
  }

  /* Tombol unduh PDF */
  .pdf-download-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #A91D3A;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
  }

  .pdf-download-btn:hover {
    background-color: #8b162e;
  }

  /* Responsif untuk tampilan mobile */
  @media (max-width: 768px) {
    .centered-logos-container {
      flex-direction: column;
      align-items: center;
      gap: 20px; /* Kurangi jarak antar logo */
    }

    .logo-icon {
      width: 100px;
      height: 100px;
    }

    .logo-title {
      font-size: 16px;
    }

    .modal-content {
      width: 90%;
      padding: 15px 20px;
    }

    .pdf-download-btn {
      width: 100%;
      text-align: center;
    }
  }

  @media (max-width: 480px) {
    .centered-logos-container {
      gap: 10px;
    }

    .logo-icon {
      width: 80px;
      height: 80px;
    }

    .logo-title {
      font-size: 14px;
    }

    .modal-content {
      padding: 10px 15px;
    }

    .pdf-download-btn {
      padding: 8px 15px;
    }
  }
  </style>

  <div class="bootsidemenu-container bootsidemenu-right" id="sideMenu">
    <!-- Tombol Toggle (bulat) -->
    <button id="toggleMenu" class="toggle-menu">❯❯</button>

    <!-- Item Menu -->
    <a href="https://api.whatsapp.com/send/?phone=6287736879970&text=Hallo++Gratama+Finance+Indonesia&type=phone_number&app_absent=0" target="_blank" id="whatsapp-button" class="bootsidemenu-item">
        <img src="assets/img/wa.png" alt="WhatsApp" class="whatsapp-icon">
    </a>
    <!-- <a href="https://www.instagram.com/lokerjakarta.info/p/CHZNsVZldNy/</a>" class="bootsidemenu-item">
        <i class="fab fa-instagram fa-2x"></i>
    </a> -->
</div>

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
        <!-- <div class="col-md-2">
          <h4 class="fw-bold">Layanan Kami</h4>
          <ul class="list-group list-unstyled">
            @foreach($services as $service)
            <li class="list-item">
              <a href="#" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> {{$service->title}}
              </a>
            </li>
            @endforeach
          </ul>
        </div> -->
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

  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>

<style>
    .marquee-container {
      overflow: hidden;
      white-space: nowrap;
      width: 300px;
      /* Atur lebar sesuai kebutuhan */
      padding: 5px 0;
      font-style: italic;
      /* Membuat teks menjadi miring */

    }

    .marquee {
      display: inline-block;
      animation: marquee 15s linear infinite;
      font-weight: bold;
      font-size: 14px;
      color: #C62E2E;
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
  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

<!-- JavaScript untuk Menampilkan dan Menyembunyikan Modal -->
<script>
    function openPdfModal(modalId) {
        document.getElementById("pdfModal" + modalId).style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById("pdfModal" + modalId).style.display = "none";
    }

    // Menutup modal saat klik di luar konten modal
    window.onclick = function(event) {
        for (let i = 1; i <= 3; i++) {
            const modal = document.getElementById("pdfModal" + i);
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
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
