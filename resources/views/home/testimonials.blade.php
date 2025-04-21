<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="{{ asset('assets/img/logogratamaIcon.png') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- AOS -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
        <!-- right menu -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin-top: 56px;
      /* Space for the fixed navbar */
    }

    .navbar {
      z-index: 1030;
      /* Ensure navbar is above other content */
    }

    .news-section {
      padding: 60px 0;
      /* Adjust padding as needed */
    }

    .title-container {
      margin-bottom: 40px;
      /* Space between title and news items */
    }

    .news-section .title {
      font-size: 2.5rem;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    .news-card {
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-image {
      width: 100%;
      height: 200px;
      /* Adjust as needed */
      object-fit: cover;
    }

    .news-body {
      padding: 1rem;
    }

    .news-title {
      font-size: 1.25rem;
      margin: 0;
    }

    .news-date {
      color: #666;
      font-size: 0.9rem;
    }

    .news-summary {
      margin: 1rem 0;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }

    /* Ensure responsiveness */
    @media (max-width: 768px) {
      .news-card {
        margin-bottom: 20px;
        /* Reduced margin for smaller screens */
      }
    }

  /* General styling */
  body {
    font-family: Oppin'Times New Roman', Times, serif, sans-serif;
  }

  /* Title Section */
  .title-container {
    margin-bottom: 40px;
  }

  .title-container h2 {
    font-size: 2.5rem;
    /* Adjust size as needed */
    font-weight: bold;
    color: #333;
    /* Color of the title */
  }

  /* Job Card Styling */
.job-card {
  border: 1px solid #ddd;
  border-radius: 0.4rem;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
  padding: 0.8rem;
  margin-bottom: 1rem;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.job-title {
  font-size: 1.3rem;
  margin: 0;
}

.job-location,
.job-type {
  color: #666;
  font-size: 0.85rem;
  margin-bottom: 0.3rem;
}

.job-description {
  margin: 0.8rem 0;
  font-size: 0.9rem;
}

.btn-apply {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  text-align: center;
  margin-top: auto;
  padding: 0.6rem 1rem;
}

.careers {
  padding-top: 60px;
}

  </style>
  <title>PT. Gratama Finance Indonesia</title>
</head>

<body>
  <!-- Navbar -->
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
            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="galeri">Galeri</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="karir">Karir</a>
        </li>

        <!-- Hubungi Kami Dropdown -->
        <li class="nav-item dropdown mx-3">
          <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('contact')) active @endif" href="#"
            id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hubungi Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="contactDropdown">
            <li><a class="dropdown-item" href="contact">Kontak</a></li>
            <li><a class="dropdown-item" href="http://localhost/pengaduan/contact.html" target="_blank">Pengaduan</a></li>
            <!-- <li><a class="dropdown-item" href="lokasi">Lokasi Kantor</a></li> -->
          </ul>
        </li>

        <!-- Pengaduan Dropdown -->
        <!-- <li class="nav-item dropdown mx-3">
          <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('pengaduan')) active @endif" href="#"
            id="pengaduanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pengaduan
          </a>
          <ul class="dropdown-menu" aria-labelledby="pengaduanDropdown">
            <li><a class="dropdown-item" href="pengaduan">Form Pengaduan</a></li>
            <li><a class="dropdown-item" href="faq">FAQ Pengaduan</a></li>
            <li><a class="dropdown-item" href="status-pengaduan">Cek Status</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
    <div class="marquee-container ms-auto d-none d-lg-block">
      <div class="marquee">
        <span>Gratama telah berizin dan diawasi oleh OJK.</span>
      </div>
    </div>
  </div>
</nav>

  <!-- End Navbar -->

  <!-- Banner Certificate Section -->
  <center>
    <section class="banner-certificate-section">
      <div class="container">
        <div class="title-container text-center mb-4">
          <h2 class="fw-bold">Sertifikat Kami</h2>
          <h5 class="subtitle" style="color: black;">Buktikan kualitas layanan kami melalui sertifikat yang telah kami terima</h5>
        </div>
        <div class="row justify-content-center"> <!-- Menambahkan justify-content-center -->
          <!-- Certificate Item 1 -->
          <div class="col-md-4 mb-4">
            <div class="certificate-card">
              <img src="assets/img/rapindo2024.jpg" alt="Certificate 1" class="img-fluid certificate-image">
              <!-- <a href="https://rapindo.co.id/members" class="btn-link" target="_blank">Lihat Sertifikat</a> -->
              <div class="certificate-body">
                <h4 class="certificate-title" style="color: black;">PT. GRATAMA FINANCE INDONESIA TERMASUK ANGGOTA RAPINDO</h4>
                <p class="certificate-date" style="color: black;">Dikeluarkan: Mei 02, 2024</p>
                <p class="certificate-summary" style="color: black;">Sesuai dengan berlakunya peraturan OJK, bahwa semua Lembaga Jasa Keuangan diwajibkan menjadi anggota RAPINDO</p>
              </div>
            </div>
          </div>
          <!-- Tambahkan lebih banyak sertifikat di sini jika diperlukan -->
        </div>
      </div>
    </section>
  </center>
  <style>
    .certificate-image {
      margin: 20px;
      /* Memberikan jarak di sekitar gambar */
    }

    .btn-link {
      display: inline-block;
      background-color: #007bff;
      /* Warna biru */
      color: white;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      /* Menghilangkan underline */
      border-radius: 5px;
      /* Membuat sudut tombol melengkung */
      margin-top: 10px;
      /* Jarak antara tombol dan gambar */
      transition: background-color 0.3s;
      /* Animasi saat hover */
    }

    .btn-link:hover {
      background-color: #0056b3;
      /* Warna saat tombol di-hover */
    }
  </style>

  <!-- Certificate Item 2 -->
  <!-- <div class="col-md-4 mb-4">
          <div class="certificate-card">
            <img src="assets/img/certificate2.jpg" alt="Certificate 2" class="img-fluid certificate-image">
            <div class="certificate-body">
              <h4 class="certificate-title">Sertifikat ISO 27001</h4>
              <p class="certificate-date">Dikeluarkan: Maret 10, 2024</p>
              <p class="certificate-summary">Sertifikat ini menegaskan bahwa sistem manajemen keamanan informasi kami telah teruji dan terverifikasi.</p>
              <a href="/certificates/iso27001" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
          </div>
        </div> -->

  <!-- Certificate Item 3 -->
  <!-- <div class="col-md-4 mb-4">
          <div class="certificate-card">
            <img src="assets/img/certificate3.jpg" alt="Certificate 3" class="img-fluid certificate-image">
            <div class="certificate-body">
              <h4 class="certificate-title">Sertifikat CE</h4>
              <p class="certificate-date">Dikeluarkan: Mei 20, 2024</p>
              <p class="certificate-summary">Sertifikat ini menunjukkan bahwa produk kami memenuhi standar keselamatan dan kesehatan yang berlaku di Uni Eropa.</p>
              <a href="/certificates/ce" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>

  <style>
    .banner-certificate-section {
      display: flex;
      /* Menggunakan Flexbox */
      flex-direction: column;
      /* Mengatur arah flex menjadi kolom */
      align-items: center;
      /* Menempatkan semua elemen di tengah */
      background-image: url('assets/img/bg-servis2.jpg');
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

    .row {
      display: flex;
      /* Menggunakan Flexbox untuk baris */
      justify-content: center;
      /* Menempatkan konten di tengah secara horizontal */
      flex-wrap: wrap;
      /* Memungkinkan baris membungkus ke baris berikutnya jika diperlukan */
    }

    .certificate-card {
      border: none;
      /* Hapus batas */
      border-radius: 8px;
      /* Sudut membulat jika diinginkan */
      overflow: hidden;
      transition: transform 0.2s;
      background-color: transparent;
      /* Pastikan latar belakang transparan */
      max-width: 500px;
      /* Atur lebar maksimum kartu jika diperlukan */
      margin: 10px;
      /* Tambahkan margin untuk jarak antar kartu jika lebih dari satu */
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

  <!-- Job Item 3
        <div class="col-md-4 mb-4">
          <div class="job-card">
            <h3 class="job-title">Digital Marketing Specialist</h3>
            <p class="job-location">Remote</p>
            <p class="job-type">Full-Time</p>
            <p class="job-description">We are seeking a Digital Marketing Specialist to help drive our marketing efforts. Experience with SEO, SEM, and social media marketing is essential Proficiency in design tools required.</p>
            <a href="/apply/3" class="btn btn-apply">Apply Now</a>
          </div>
        </div>
      </div>
    </div> -->


  <!-- End News Section -->

  <!-- Footer -->
<footer class="mt-5">
  <div class="footer-top bg-dark text-white p-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h4 class="fw-bold">{{ $contact->name }}</h4>
          <p>{{ $contact->description }}</p>
          <p><strong>Telp :</strong> {{ $contact->telepon }}</p>
          <p><strong>Email:</strong> {{ $contact->email }}</p>
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
        </div>
      </div>
    </div>
  </div>
</footer>

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
  <!-- End Footer -->

  <!-- To Top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- End To Top -->

  <!-- Scripts -->
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

<script>
  $(document).ready(function() {
    $('.navbar-toggler').on('click', function() {
        $(this).toggleClass('collapsed');
    });
});
</script>

<script>
        // Blokir klik kanan di semua gambar
        document.addEventListener('contextmenu', function (e) {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
            }
        });
    </script>

</body>
</html>