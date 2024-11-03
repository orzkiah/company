<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <title>PT. Gratama</title>

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
            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="about">Pengelola</a></li>
            <li><a class="dropdown-item" href="team">Tata Kelola</a></li>
            <li><a class="dropdown-item" href="testimonials">Publikasi/Karir</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="portfolio">Galeri</a>
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
      <div class="d-flex justify-content-between align-items-center text-white"> -->
  <h2>Pengelola</h2>
  <ol class="d-flex list-unstyled">
    <li>Home</li>
    <li>About</li>
  </ol>
  </div>
  </div>
  </div>
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
        <div class="modal fade" id="teamModal{{$i}}" tabindex="-1" aria-labelledby="teamModalLabel{{$i}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="teamModalLabel{{$i}}">{{$teams[$i]->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="image/{{$teams[$i]->image}}" class="team-img-modal rounded-circle mb-3" alt="...">
                        <p class="text-muted">{{$teams[$i]->description}}</p>
                        <p class="text-secondary">Biodata: {{ $teams[$i]->biodata ?? 'Informasi biodata belum' }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endfor



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
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek transisi yang halus */
    }

    .team-card:hover {
        transform: scale(1.05); /* Zoom sedikit saat hover */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan saat hover */
    }

    .team-img {
        transition: transform 0.3s ease; /* Transisi halus untuk gambar */
    }

    .team-card:hover .team-img {
        transform: scale(1.1); /* Zoom pada gambar saat hover */
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

  <body>
    <div class="whatsapp-container">
      <a href="https://api.whatsapp.com/send/?phone=6287736879970&text=Hallo++Gratama+Finance+Indonesia&type=phone_number&app_absent=0" target="_blank" id="whatsapp-button">
        <img src="assets/img/wa.png" alt="WhatsApp" class="whatsapp-icon">
      </a>
    </div>

    <script src="script.js"></script>
  </body>


  <style>
   .whatsapp-container {
  position: fixed; /* Menggunakan fixed agar selalu terlihat */
  bottom: 20px; /* Jarak dari bagian bawah */
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
          <p><strong>Phone:</strong> {{$contact->telepon}}</p>
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
            <!-- <li class="list-item">
              <a href="/services" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> Layanan
              </a>
            </li> -->
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
        <div class="col-md-3">
  <!-- <h4 class="fw-bold">Tentang Kami</h4> -->
  <p>Logo perusahaan.</p>
  <div class="logo-section">
    <img src="assets/img/logoG2.png" alt="Logo Perusahaan" class="img-fluid" style="max-width: 100%;">
  </div>
</div>

<style>
  /* Style tambahan untuk logo */
  .logo-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 0;
  }
</style>
     </div>
    </div>
  </div>
  <div class="footer-down bg-darker text-white px-5 py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div>&copy; 2024 <strong>orzkiah</strong>. All Rights Reserved.</div>
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
  // script.js
const whatsappButton = document.getElementById('whatsapp-button');

let isDragging = false;
let offsetX, offsetY;

whatsappButton.addEventListener('mousedown', (e) => {
  isDragging = true;
  offsetX = e.clientX - whatsappButton.getBoundingClientRect().left;
  offsetY = e.clientY - whatsappButton.getBoundingClientRect().top;
  whatsappButton.style.cursor = 'grabbing'; // Ubah kursor saat dragging
});

document.addEventListener('mousemove', (e) => {
  if (isDragging) {
    whatsappButton.style.left = e.clientX - offsetX + 'px';
    whatsappButton.style.top = e.clientY - offsetY + 'px';
  }
});

document.addEventListener('mouseup', () => {
  isDragging = false;
  whatsappButton.style.cursor = 'grab'; // Kembali ke kursor normal
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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
</body>
</html>