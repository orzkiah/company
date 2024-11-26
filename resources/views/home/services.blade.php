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
  <!-- navbar -->
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
          <li><a class="dropdown-item" href="about">Pengelola</a></li>
          <li><a class="dropdown-item" href="team">Tata Kelola</a></li>
          <li><a class="dropdown-item" href="testimonials">Publikasi</a></li>
          </ul>
          </li>
          <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="galeri">Galeri</a>
          </li>
          <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('karir')) active @endif" href="/karir">Karir</a>
          </li>
          <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('contact')) active @endif" href="contact">Hubungi Kami</a>
          </li>
          </u>
          </div>
          <div class="marquee-container ms-auto d-none d-lg-block">
          <div class="marquee">
        <span>Gratama telah berizin dan diawasi oleh OJK.</span>
      </div>
    </div>
  </div>
</nav>
<!-- end breadcumbs -->
 
  <!-- Careers Section -->
  <section class="careers py-2 mt-5">
    
    <div class="row">
      <div class="title-container text-center">
      </div>
      <div class="title-container1 text-center">
        <h2 class="fw-bold">Karir</h2>
      </div>
      <style>
        .title-container1 {
          position: relative;
          display: inline-block; /* Agar pas mengikuti ukuran teks */
          background: rgba(0, 0, 0, 0.6); /* Warna hitam dengan transparansi */
          padding: 10px 20px; /* Ruang sekitar teks */
          border-radius: 8px; /* Membuat sudut melengkung */
        }
        .title-container1 h2 {
          color: #fff; /* Warna teks putih agar kontras */
          font-size: 38px; /* Ukuran font */
          margin: 0; /* Hilangkan margin default */
        }
      </style>
      <div class="row">
        <!-- Job Item 1 -->
        <div class="col-md-4 mb-4">
          <div class="job-card">
            <h3 class="job-title">Dealer Financing Supervisor</h3>
            <p class="job-location">Kantor Pusat (SCBD - Jakarta Selatan)</p>
            <p class="job-type">Full-Time</p>
            <hr>
            <p class="job-description">Pria Max. 35 Tahun.</p>
            <p>Pendidikan Minimal S1 Akuntansi</p>
            <p>Memiliki penglaman kerja dijabatan Supervisor minimal 1 tahun</p>
            <p>Lebih disukai apabila memiliki pengalaman di leasing</p>
            <p>Menguasai MS. Exel, Memahami prinsip Akuntansi (PSAK) dan regulasi dibidang keuangan</p>
            <p>Berpenampilan rapih, disiplin, dan bertanggung jawab</p>
            <hr>
            <center>
              <p class="job-title">hrdcv@gratama-finance.co.id</p>
            </center>
            <a href="https://mail.google.com/" class="btn btn-apply">Apply Now</a>
          </div>
        </div>

        <!-- Job Item 2 -->
        <div class="col-md-4 mb-4">
          <div class="job-card">
            <h3 class="job-title">Staff Accounting</h3>
            <p class="job-location">Kantor Pusat (SCBD - Jakarta Selatan)</p>
            <p class="job-type">Part-Time</p>
            <hr>
            <p class="job-description">Pendidikan Minimal D3 Akuntansi.</p>
            <p>Fresh graduate/pengalaman 1 thn</p>
            <p>Single, Penampilan rapih, Usia max 25 thn</p>
            <p>Mahir mengoperasikan komputer (Microsoft Office)</p>
            <p>Teliti, Jujur & Bertanggung jawab</p>
            <hr>
            <center>
              <p class="job-title">hrdcv@gratama-finance.co.id</p>
            </center>
            <a href="https://mail.google.com//" class="btn btn-apply">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<style>

.row {
    display: flex;
    flex-wrap: wrap; /* Card dapat berpindah baris jika diperlukan */
    justify-content: center; /* Pusatkan secara horizontal */
    align-items: stretch; /* Buat semua card memiliki tinggi sama */
    gap: 20px; /* Jarak antar card */
}


.careers {
  background-image: url('assets/img/bg-port.jpg');
}
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Tambahkan jarak antar kolom */
}

.col-md-4 {
    display: flex;
    flex: 1 1 calc(33.333% - 20px); /* Kolom memiliki lebar yang sama */
    max-width: calc(33.333% - 20px);
}

.job-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 100%; /* Pastikan card menyesuaikan lebar kolom */
    height: 100%; /* Tambahkan untuk memastikan tinggi seragam */
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
}

.job-title {
    font-size: 20px;
    color: #333;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: center; /* Agar teks lebih rapi */
}

.job-location,
.job-type,
.job-description {
    color: #555;
    font-size: 14px;
    margin: 5px 0;
    text-align: center; /* Sesuaikan dengan card */
}

.job-card hr {
    margin: 15px 0;
    border-top: 3px solid #ddd;
}

/* Menambahkan jarak antara email dan tombol */
.center p {
    font-weight: bold;
    color: #007bff;
    font-size: 18px;
}

/* Styling untuk tombol Apply Now */
.btn-apply {
    margin-top: auto; /* Dorong tombol "Apply Now" ke bagian bawah */
    display: inline-block;
    padding: 10px 20px;
    font-size: 14px;
    color: #fff;
    background-color: #C62E2E;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    text-align: center;
}

.btn-apply:hover {
    background-color: #0056b3;
}

/* Untuk layar tablet atau lebih kecil */
@media (max-width: 768px) {
    .row {
        flex-direction: column; /* Susun card secara vertikal */
        justify-content: center; /* Pusatkan secara vertikal */
        align-items: center; /* Pusatkan secara horizontal */
    }

    .col-md-4 {
        flex: 0 0 80%; /* Buat card menggunakan 80% lebar layar */
        max-width: 80%;
    }

    .job-card {
        padding: 15px; /* Kurangi padding untuk menghemat ruang */
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Kurangi efek bayangan */
    }

    .job-title {
        font-size: 18px; /* Ukuran font lebih kecil untuk layar tablet */
    }

    .job-location,
    .job-type,
    .job-description {
        font-size: 13px; /* Sesuaikan ukuran font */
    }

    .btn-apply {
        font-size: 12px; /* Kurangi ukuran tombol */
        padding: 8px 16px;
    }
}

/* Untuk layar ponsel kecil (maksimal 480px) */
@media (max-width: 480px) {
    .job-card {
        padding: 10px; /* Kurangi padding lebih banyak */
    }

    .job-title {
        font-size: 16px; /* Ukuran font lebih kecil */
    }

    .job-location,
    .job-type,
    .job-description {
        font-size: 12px; /* Kurangi ukuran font */
    }

    .btn-apply {
        font-size: 11px; /* Ukuran tombol lebih kecil */
        padding: 6px 12px;
    }
}

</style>

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
  /* Background foto pada footer */
  .footer-top {
    background-image: url('assets/img/194.jpg'); /* Ganti dengan path gambar yang Anda inginkan */
    background-size: cover;
    background-position: center;
    color: white;
    position: relative;
  }

  /* Overlay agar teks lebih jelas */
  .footer-top::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.85); /* Lapisan gelap transparan */
    z-index: 1;
  }

  /* Untuk memastikan konten berada di atas overlay */
  .footer-top .container-fluid {
    position: relative;
    z-index: 2;
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.js"></script>
  

<script>
  document.querySelectorAll('.detail-btn').forEach(button => {
    button.addEventListener('click', () => {
        const detail = button.nextElementSibling;

        // Toggle visibility of the detail
        detail.style.display = detail.style.display === 'block' ? 'none' : 'block';
    });
});
</script>

  

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