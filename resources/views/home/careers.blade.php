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
          <!-- <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="services">Layanan</a>
          </li> -->
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="portfolio">Galeri</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('careers')) active @endif" href="contact">Karir</a>
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
<section class="careers py-2 mt-5">
    <div class="container">
        <div class="title-container text-center">
            <h2 class="fw-bold">Karir</h2>
        </div>
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
                    <p>Memiliki pengalaman kerja di jabatan Supervisor minimal 1 tahun</p>
                    <p>Lebih disukai apabila memiliki pengalaman di leasing</p>
                    <p>Menguasai MS. Excel, Memahami prinsip Akuntansi (PSAK) dan regulasi di bidang keuangan</p>
                    <p>Berpenampilan rapi, disiplin, dan bertanggung jawab</p>
                    <hr>
                    <center>
                        <p>hrdcv@gratama-finance.co.id</p>
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
                    <p>Fresh graduate/pengalaman 1 tahun</p>
                    <p>Single, Penampilan rapi, Usia max 25 tahun</p>
                    <p>Mahir mengoperasikan komputer (Microsoft Office)</p>
                    <p>Teliti, Jujur & Bertanggung jawab</p>
                    <hr>
                    <center>
                        <p>hrdcv@gratama-finance.co.id</p>
                    </center>
                    <a href="https://mail.google.com/" class="btn btn-apply">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
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
  <!-- <p>Logo perusahaan.</p> -->
  <div class="logo-section">
    <img src="assets/img/logoG2.png" alt="Logo Perusahaan" class="img-fluid" style="max-width: 80%;">
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
</body>
</html>
