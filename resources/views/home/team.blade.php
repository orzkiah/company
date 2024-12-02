<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="{{ asset('assets/img/logogratamaIcon.png') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css" />
        <!-- right menu -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">


  <title>PT. Gratama Finance Indonesia</title>

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


  <script>
    function setActive(element) {
      // Menghapus kelas 'active' dari semua nav-link
      const navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(link => {
        link.classList.remove('active');
      });

      // Menambahkan kelas 'active' ke elemen yang diklik
      element.classList.add('active');
    }
  </script>


  <!-- Header Section -->
  <header class="header">
    <div class="video-background">
      <video autoplay loop muted>
        <source src="assets/img/header.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="container">
      <h1>Selamat Datang di Perusahaan Kami</h1>
      <p>Komitmen kami untuk inovasi, kualitas, dan kepuasan pelanggan</p>
    </div>
  </header>

  <!-- About Us Section -->
  <section id="about" class="about-section">
      <h1 class="section-title">Nilai Nilai Dasar</h1>
      <div class="about-content">
    <p>Perseroan menyadari pentingnya penerapan tata kelola perusahaan guna menumbuhkan kepercayaan dari kreditur, nasabah, mitra bisnis, kreditur, pemegang saham dan para pemangku kepentingan <i>(stakeholders)</i> lainnya. Pelaksanaan tata kelola perusahaan di perseroan di dasarkan pada prinsip-prinsip keadilan, keterbukaan, akuntabilitas, dan tanggung jawab. Dalam sepuluh tahun terakhir, konsep <i>Good Corporate Governance</i> (GCG) atau Tata Kelola Perusahaan telah di tempatkan pada posisi yang strategis di berbagai perusahaan, serta memberikan manfaat jangka panjang, sekaligus memenangkan persaingan bisnis. Kegagalan dalam penerapan GCG dapat menjadi penyebab utama kegagalan perusahaan untuk bertahan dalam persaingan bisnis.</p>
    <p>Sesuai dengan peraturan Otoritas Jasa Keuangan Nomor 30/POJK.05/2014, bahwa dalam rangka meningkatkan kinerja perusahaan, melindungi kepentingan stakeholders dan meningkatkan kepatuhan terhadap peraturan perundang-undangan serta nilai-nilai etika <i>(Code Of Conduct)</i> yang berlaku secara umum pada industri pembiayaan, perusahaan wajib melaksanakan kegiatan usahanya dengan berpedoman pada prinsip GCG. Pelaksanaan GCG pada industri pembiayaan harus senantiasa berlandaskan pada lima prinsip dasar, yaitu:</p>
    <ul class="about-list">
        <li>Transparansi <pre> </pre><i> (transparency)</i></li>
        <li>Akuntabilitas <pre> </pre><i> (accountability)</i></li>
        <li>Pertanggung jawaban <pre> </pre><i> (responsibility)</i></li>
        <li>Independensi <pre> </pre> <i> (independency)</i></li>
        <li>Kewajaran <pre> </pre> <i> (fairness)</i></li>
    </ul>
    <p>Pelaksanaan GCG harus diterapkan pada seluruh pengurus dan pegawai Perusahaan mulai dari dewan Komisaris, Direksi, sampai dengan pegawai tingkat pelaksana.</p>
    <hr>
    <h4>Penerapan Tata Kelola Perusahaan yang baik bertujuan untuk:</h4>
    
    <ul class="about-list">
        <li>Meningkatkan kesadaran tentang penyelenggaraan Tata Kelola Perusahaan yang baik dalam perusahaan.</li>
        <li>Memberikan kesamaan persepsi dalam semua tingkatan manajemen hingga stakeholder tentang Tata Kelola Perusahaan yang baik.</li>
        <li>Menjadi acuan bagi perusahaan dalam menerapkan Tata Kelola Perusahaan yang baik.</li>
        <li>Dengan menerapkan Tata Kelola Perusahaan yang baik, maka diharapkan dapat mengoptimalkan nilai Perusahaan bagi Pemangku Kepentingan, khususnya Debitur, Kreditur / pemangku kepentingan lainnya.</li>
        <li>Meningkatkan kepatuhan Organ Perusahaan dalam membuat keputusan dan menjalankan tindakan dilandasi pada etika yang tinggi, kepatuhan terhadap peraturan perundang-undangan, dan kesadaran atas tanggung jawab sosial perusahaan terhadap pemangku Kepentingan maupun kelestarian lingkungan.</li>
        <li>Meningkatkan pengelolaan Perusahaan secara profesional, efektif, dan efisien.</li>
        <li>Mencegah dan mengurangi kemungkinan terjadinya benturan kepentingan yang merugikan bagi perusahaan dan seluruh stakeholder.</li>
        <li>Menciptakan kondisi dan situasi industri pembiayaan yang kondusif.</li>
        <li>Meningkatkan profesionalitas dalam memberikan pelayanan kepada konsumen dalam industri pembiayaan.</li>
        <li>Mewujudkan Perusahaan yang lebih sehat, dapat diandalkan, dan kompetitif.</li>
        <li>Meningkatkan kontribusi serta efektifitas pelaksanaan fungsi dan peranan perusahaan pembiayaan dalam perekonomian nasional.</li>
        <li>Menjadi salah satu tolak ukur penerapan kinerja Perusahaan.</li>
    </ul>
    <hr>
</div>
  

<style>
    /* Styling About Content */
    .about-content {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .about-list {
        list-style: none;
        padding-left: 0;
    }

    .about-list li {
        display: flex;
        align-items: flex-start;
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
    }

    .about-list li::before {
        content: "*"; /* Ganti dengan karakter simbol atau icon yang diinginkan */
        color: #A91D3A;
        font-size: 1.2em;
        position: absolute;
        left: 0;
        top: 0;
    }
</style>

    </div>
  

<!-- Container Utama untuk Tiga Logo dan Judulnya -->
<!-- <div class="centered-logos-container">
    <div class="logo-icon-container" onclick="openPdfModal(1)">
        <img src="assets/img/inves.png" alt="PDF Reports" class="logo-icon">
        <h4 class="logo-title">HUBUNGAN INVESTOR</h4>
    </div>

    <div class="logo-icon-container" onclick="openPdfModal(2)">
        <img src="assets/img/keuangan.png" alt="PDF Reports" class="logo-icon">
        <h4 class="logo-title">LAPORAN KEUANGAN</h4>
    </div>

    <div class="logo-icon-container" onclick="openPdfModal(3)">
        <img src="assets/img/ojk.png" alt="PDF Reports" class="logo-icon">
        <h4 class="logo-title">LAPORAN OJK</h4>
    </div>
</div> -->

<!-- Modal Konten Laporan PDF -->
<!-- <div id="pdfModal1" class="modal">
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
</div> -->

<!-- <div id="pdfModal3" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal(3)">&times;</span>
        <div class="pdf-button-container">
            <h4 class="color">Laporan OJK</h4>
            <a href="https://gratama-finance.co.id/pdf/RAKB%202023%20Pembiayaan%20Kendaraan%20Bertenaga%20Listrik.pdf" class="pdf-download-btn">Download Laporan 2023</a>
        </div>
    </div>
</div> -->
</section>

<!-- Style -->
<style>
/* Warna teks */
.color {
  color: #A91D3A;
}

/* Kontainer logo berpusat */
.centered-logos-container {
    display: flex;
    justify-content: center;
    gap: 100px; /* Jarak antar logo */
    margin-bottom: 50px;
    flex-wrap: wrap;
}

/* Kontainer setiap logo dan judul */
.logo-icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 20px; /* Menambahkan jarak di kiri dan kanan logo */
}

/* Efek saat hover pada logo */
.logo-icon-container:hover {
    transform: scale(1.1);
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


  <style>
    .header {
      position: relative;
      /* Mengatur posisi relatif untuk konten header */
      color: white;
      /* Mengatur warna teks agar terlihat jelas di atas video */
      text-align: center;
      /* Mengatur teks menjadi tengah */
      padding: 100px 0;
      /* Jarak atas dan bawah untuk teks */
    }

    .video-background {
      position: absolute;
      /* Mengatur posisi absolut untuk video */
      top: 0;
      /* Memposisikan video di bagian atas */
      left: 0;
      /* Memposisikan video di sebelah kiri */
      width: 100%;
      /* Mengatur lebar video 100% dari kontainer */
      height: 100%;
      /* Mengatur tinggi video 100% dari kontainer */
      overflow: hidden;
      /* Menghilangkan overflow video */
      z-index: -1;
      /* Mengatur video di belakang konten */
    }

    video {
      object-fit: cover;
      /* Mengatur video agar menutupi area kontainer */
      width: 100%;
      /* Lebar video 100% */
      height: 100%;
      /* Tinggi video 100% */
    }

    .header h1 {
      font-size: 3rem;
    }

    ul li {
      text-align: justify;
      list-style-position: inside;
      margin-bottom: 10px;
    }

    .header p {
      font-size: 1.2rem;
      margin-top: 10px;
    }

    /* Section Titles */
    .section-title {
      font-size: 2 .5rem;
      text-align: center;
      margin-bottom: 20px;
    }

    /* About Us Section */
    .about-section {
      padding: 50px 30px;
      background: #f9f9f9;
      text-align: justify;
      background: url('assets/img/bg-port.jpg') no-repeat center center;
      /* Ganti 'your-image.jpg' dengan URL gambar Anda */
      background-size: cover;
      /* Mengatur agar gambar menutupi seluruh area */
      padding: 50px 0;
      /* Menambahkan padding atas dan bawah untuk ruang ekstra */
      color: black;
      /* Mengatur warna teks agar kontras dengan gambar */
    }

    .about-content {
      position: relative;
      /* Menetapkan posisi relatif */
      z-index: 10;
      /* Mengatur z-index lebih tinggi */
      max-width: 1200px;
      margin: 0 auto;
      font-size: 1.1rem;
      color: white;
      background-color: rgba(0, 0, 0, 0.0);
      /* Overlay hitam transparan di belakang teks */
      padding: 30px;
      /* Memberikan padding di dalam konten */
      border-radius: 10px;
      /* Membuat sudut konten melengkung */
      color: #000000;
      /* Mengubah warna teks menjadi putih */
    }


    /* Values Section */
    .values-section {
      background: #fff;
      padding: 50px 20px;
      text-align: center;
    }

    .values-list {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .value-item {
      max-width: 300px;
      padding: 20px;
      background: #f1f1f1;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .value-item h3 {
      font-size: 1.5rem;
      color: #630303;
    }

    .value-item p {
      font-size: 1rem;
      margin-top: 10px;
      color: #555;
    }

    /* Styling for unordered list (bullet points) */
    .point-list {
      list-style-type: disc;
      margin-left: 20px;
      /* Jarak kiri untuk bullet */
      padding-left: 0;
      /* Menghilangkan padding default */
      color: #333;
    }
  </style>
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