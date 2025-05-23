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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
</head>

  <title>PT. Gratama Finance Indonesia</title>

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

<style>
  .navbar {
    border-radius: 0 0 100px 0;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  
    z-index: 1000;
  }

  .navbar-nav {
    display: flex;
    align-items: center;
  }

  .nav-item {
    margin: 0 10px;
  }

  .nav-link {
    padding: 10px 15px;
  }

  .nav-link.active {
    color: #ff4081;
    border-bottom: 2px solid #ff4081;
  }

  .marquee-container {
    overflow: hidden;
    white-space: nowrap;
    width: 250px;
    padding: 5px 0;
  }

  .marquee {
    display: inline-block;
    animation: marquee 15s linear infinite;
    font-weight: bold;
    font-size: 14px;
    color: #C62E2E;
    font-style: italic;
  }

  @keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
  }

  .navbar .dropdown-menu {
    border-radius: 0 0 15px 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    /* display: block !important; Memaksa dropdown tampil untuk pengujian */
  }

  .navbar .dropdown-item:hover {
    background-color: #f0f0f0;
  }

  .navbar-brand img,
  .logo {
    height: 40px;
    width: auto;
    object-fit: contain;
  }

  .custom-navbar {
    background-color: #ffffff;
    opacity: 1;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000; /* Pastikan navbar selalu di atas */
}


  /* Responsiveness */
  @media (max-width: 991px) {
    .navbar-nav {
      flex-direction: column;
      text-align: center;
    }
    .nav-item {
      margin: 5px 0;
    }
    .marquee-container {
      display: none;
    }
  }

  /* Tambahkan di dalam tag <style> atau file CSS Anda */
@media (max-width: 768px) {
  .marquee-container {
    display: none;
  }
}
</style>


  <!-- end navbar -->

  <!-- breadcumbs  -->
    <!-- <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
  <h2>Pengelola</h2>
  <ol class="d-flex list-unstyled">
    <li>Home</li>
    <li>About</li>
  </ol>
  </div>
  </div>
  </div> -->
  <!-- end breadcumbs -->


  <!-- about -->
  <!-- <div class="about-us mt-5">
    <div class="container"> -->

  <!-- <div cl  ass="title-container text-center ">
        <h2 class="fw-bold">ABOUT US</h2>
      </div> -->

  <!-- <div class="row mt-4">
        <div class="col-md-5" data-aos="fade-right">
          <center>
            <h2 class="fw-bold about-us-title">
              {{$about->judul}}
            </h2>
          </center>
          <center>
            <p class="fw-bolder mt-4 about-us-subtitle">
              {{$about->subjudul}}
            </p>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <p>
            </center>
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
    </div> -->
  <!-- end about -->

  <!-- teams -->
<div class="teams bg-light mt-8 py-8">
    <div class="container">
        <div class="title-container mb-4">
          <div class="title-container mb-4"></div>
            <h2 class="text-center fw-bold">DEWAN KOMISARIS</h2>
        </div>
        <div class="row">
            <!-- First section: 2 images -->
            @for ($i = 1; $i <= 2; $i++)
                @if (isset($teams[$i]))
                    <div class="col-md-6 d-flex justify-content-center mb-4">
                        <div class="team-card">
                            <img src="image/{{$teams[$i]->image}}" class="team-img rounded-circle" alt="..."
                                 data-bs-toggle="modal" data-bs-target="#teamModal{{$i}}">
                            <div class="team-body text-center">
                                <h5 class="team-title fw-bold">{{$teams[$i]->title}}</h5>
                                <p class="team-text text-muted">{{$teams[$i]->description}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor

            <!-- Middle section: 1 image -->
            <div class="title-container mb-4">
                <h2 class="text-center fw-bold">DEWAN DIREKSI</h2>
            </div>
            <div class="col-12 d-flex justify-content-center mb-4">
                @if (isset($teams[0]))
                    <div class="team-card">
                        <img src="image/{{$teams[0]->image}}" class="team-img rounded-circle" alt="..."
                             data-bs-toggle="modal" data-bs-target="#teamModal0">
                        <div class="team-body text-center">
                            <h5 class="team-title fw-bold">{{$teams[0]->title}}</h5>
                            <p class="team-text text-muted">{{$teams[0]->description}}</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Last section: 3 images -->
            @for ($i = 3; $i <= 5; $i++)
                @if (isset($teams[$i]))
                    <div class="col-md-4 d-flex justify-content-center mb-4">
                        <div class="team-card">
                            <img src="image/{{$teams[$i]->image}}" class="team-img rounded-circle" alt="..."
                                 data-bs-toggle="modal" data-bs-target="#teamModal{{$i}}">
                            <div class="team-body text-center">
                                <h5 class="team-title fw-bold">{{$teams[$i]->title}}</h5>
                                <p class="team-text text-muted">{{$teams[$i]->description}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    </div>
</div>

<!-- Modals for each team member -->
@for ($i = 0; $i <= 5; $i++)
    @if (isset($teams[$i]))
        <!-- <div class="modal fade" id="teamModal{{$i}}" tabindex="-1" aria-labelledby="teamModalLabel{{$i}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="teamModalLabel{{$i}}">{{$teams[$i]->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="image/{{$teams[$i]->image}}" class="team-img-modal rounded-circle mb-3" alt="...">
                        <p class="text-muted">{{$teams[$i]->description}}</p>
                        <p class="text-secondary">{{ $teams[$i]->biodata ?? 'Informasi biodata belum' }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
    @endif
@endfor

<style>
  /* Background untuk modal-body */
  .modal-body {
    background: linear-gradient(to bottom right, #f0f0f0, #d9d9d9);
    padding: 20px;
    border-radius: 10px;
  }

  /* Background untuk keseluruhan modal */
  .modal-content {
    background-color: #ffffff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
  }

  /* Mengatur gambar dalam modal */
  .team-img-modal {
    width: 150px;
    height: 150px;
    object-fit: cover;
  }

  /* Background overlay saat modal muncul */
  .modal-backdrop.show {
    background: rgba(0, 0, 0, 0.5);
  }
</style>


<!-- Style dan animasi -->
<style>
    .teams {
        background-image: url('assets/img/bg-team.jpg');
        background-size: cover;
        background-position: center;
        padding: 40px 0;
        color: black;
    }

    .team-card {
        border: none;
        box-shadow: none;
        background: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .team-img {
        transition: transform 0.3s ease;
    }

    .team-card:hover .team-img {
        transform: scale(1.1);
    }

    .team-body {
        transition: color 0.3s ease; /* Transisi halus pada warna teks */
    }

    .team-card:hover .team-body {
        color: #333; /* Ubah warna teks saat hover jika diinginkan */
    }
</style>

  <!-- end teams -->
   <div class="container7">
        <h1>Visi dan Misi</h1>
        <table>
            <thead>
                <tr>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <!-- Visi -->
                    <td>Menjadi sebuah perusahaan pembiayaan yang cepat, terpercaya, dan fleksible.</td>
                  <!-- Misi -->
                    <td>Gratama Finance fokus menyalurkan Pembiayaan Fasilitas Modal Usaha kepada showroom mobil bekas dengan pertimbangan :</td>
                     <td>
                        <button class="detail-btn">Lihat Detail</button>
                        <ul class="detail" style="display: none;">
                            <li>Memberikan kesempatan kepada debitur-debitur mobil bekas agar mampu meningkatkan kapasitas penjualan dan pertumbuhan yang berkelanjutan secara mandiri.</li>
                            <li>Meningkatkan penyaluran pembiayaan kepada debitur-debitur mobil bekas baik yang berada di tingkat provisi, kabupaten/kotamadya maupun kecamatan yang masih lemah dari segi permodalan dan pengelolaan usahanya.</li>
                            <li>Meningkatkan jenis layanan produk investasi, modal kerja, dan muti guna yang akan meningkatkan portofolio pembiayaan.</li>
                            <li>Meningkatkan profitabilitas dengan meningkatkan customer based serta jaringannya.</li>
                            <li>Mempermudah proses pembelian kendaraan bermotor dengan akses cepat, aman dan terpercaya.</li>
                            <li>Membantu pemerintah meningkatkan kinerja UMKM.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <style>
      .container7 {
    max-width: 1000px;
    margin: auto;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

h1 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #C62E2E;
    color: white;
}

tr:hover {
    background-color: #f1f1f1;
}

.detail-btn {
    background-color: #C62E2E;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.detail-btn:hover {
    background-color: #0056b3;
}

.detail {
    margin-top: 10px;
    font-style: italic;
    color: #555;
}
    </style>
  <!-- end clients -->
  <!-- WA -->
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

  <style>
   .whatsapp-container {
  position: fixed; /* Menggunakan fixed agar selalu terlihat */
  bottom: 200px; /* Jarak dari bagian bawah */
  left: 20px; /* Jarak dari bagian kanan */
  z-index: 1000; /* Agar tombol muncul di atas elemen lain */
}

#whatsapp-button {
  border: none;
  background: transparent; /* Tanpa latar belakang */
  cursor: pointer; /* Menunjukkan tombol dapat diklik */
}

.whatsapp-icon {
  width: 60px; /* Atur ukuran ikon sesuai kebutuhan */
  height: auto; /* Menjaga aspek rasio */
}
  </style>

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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
</body>
</html>