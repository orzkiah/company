<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
      font-family: Arial, sans-serif;
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
      border-radius: 0.5rem;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      margin-bottom: 1.5rem;
      height: 100%;
      /* Ensure all job cards have equal height */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* Space out the content evenly */
    }

    .job-title {
      font-size: 1.5rem;
      margin: 0;
    }

    .job-location,
    .job-type {
      color: #666;
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }

    .job-description {
      margin: 1rem;
    }

    .btn-apply {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
      text-align: center;
      margin-top: auto;
      /* Push the button to the bottom */
    }

    /* Careers Section Styling */
    .careers {
      padding-top: 80px;
    }

    .job-card {
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      margin-bottom: 1.5rem;
    }

    .job-title {
      font-size: 1.5rem;
      margin: 0;
    }

    .job-location,
    .job-type {
      color: #666;
      font-size: 0.9rem;
    }

    .job-description {
      margin: 1rem 0;
    }

    .btn-apply {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }
  </style>
  <title>News Page</title>
</head>

<body>
  <!-- Navbar -->
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

  <!-- End Navbar -->

  <!-- Banner Certificate Section -->
  <center>
    <section class="banner-certificate-section">
      <div class="container">
        <div class="title-container text-center mb-4">
          <h2 class="fw-bold">Sertifikat Kami</h2>
          <p class="subtitle">Buktikan kualitas layanan kami melalui sertifikat yang telah kami terima</p>
        </div>
        <div class="row justify-content-center"> <!-- Menambahkan justify-content-center -->
          <!-- Certificate Item 1 -->
          <div class="col-md-4 mb-4">
            <div class="certificate-card">
              <img src="assets/img/rapindo2024.jpg" alt="Certificate 1" class="img-fluid certificate-image">
              <div class="certificate-body">
                <h4 class="certificate-title">PT. GRATAMA FINANCE INDONESIA TERMASUK ANGGOTA RAPINDO</h4>
                <p class="certificate-date">Dikeluarkan: Mei 02, 2024</p>
                <p class="certificate-summary">Sesuai dengan berlakunya peraturan OJK, bahwa semua Lembaga Jasa Keuangan di wajibkan menjadi anggota RAPINDO</p>
              </div>
            </div>
          </div>
          <!-- Tambahkan lebih banyak sertifikat di sini jika diperlukan -->
        </div>
      </div>
    </section>
  </center>

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
      padding: 50px 0;
      background-color: #f9f9f9;
      /* Atur warna latar belakang sesuai kebutuhan */
      display: flex;
      /* Menggunakan Flexbox */
      flex-direction: column;
      /* Mengatur arah flex menjadi kolom */
      align-items: center;
      /* Menempatkan semua elemen di tengah */
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

  <!-- Careers Section -->
  <section class="careers py-2 mt-5">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">Karir</h2>
      </div>
      <!-- <p class="text-center mb-4">
        Explore exciting career opportunities with us. Join our team and make a difference!
      </p> -->
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
            <a href="/apply/1" class="btn btn-apply">Apply Now</a>
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
            <a href="https://web.whatsapp.com/" class="btn btn-apply">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

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
            <h4 class="fw-bold">{{$contact->name}}</h4>
            <p>{{$contact->description}}</p>
            <strong>Phone</strong>: <span>{{$contact->telepon}}</span>
            <br />
            <strong>Email</strong>: <span>{{$contact->email}}</span>
          </div>
          <div class="col-md-2">
            <h4 class="fw-bold">Our Services</h4>
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
            <h4 class="fw-bold">Useful Links</h4>
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
            <h4 class="fw-bold">Join Our Newsletter</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
          <div class="col-md-5">
            <div class="social-links float-end">
              <a href="" class="mx-2">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-linkedin fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
</body>

</html>