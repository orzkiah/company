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
            <p>Fresh graduate/pengalaman 1 thn</p>
            <p>Single, Penampilan rapih, Usia max 25 thn</p>
            <p>Mahir mengoperasikan komputer (Microsoft Office)</p>
            <p>Teliti, Jujur & Bertanggung jawab</p>
            <hr>
            <center>
              <p>hrdcv@gratama-finance.co.id</p>
            </center>
            <a href="https://mail.google.com//" class="btn btn-apply">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- wa -->

  <body>
    <div class="whatsapp-container">
      <button id="whatsapp-button">
        <img src="assets/img/wa.png" alt="WhatsApp" class="whatsapp-icon">
      </button>
      <div class="popup" id="whatsapp-popup">
        <!-- <p>Hello! How can I help you today?</p> -->
        <a href="https://api.whatsapp.com/send/?phone=6287736879970&text=Hallo++Gratama+Finance+Indonesia&type=phone_number&app_absent=0" target="_blank" class="chat-button">Chat Now</a>
      </div>
    </div>

    <script src="script.js"></script>
  </body>

  <style>
    /* styles.css */
    .whatsapp-container {
      position: fixed;
      top: 50%;
      /* Memposisikan di tengah secara vertikal */
      right: 20px;
      /* Jarak dari kanan layar */
      transform: translateY(-50%);
      /* Menyesuaikan agar benar-benar di tengah */
      z-index: 1000;
      /* Memastikan tombol berada di atas elemen lain */
      cursor: grab;
      /* Mengubah kursor saat tombol dapat dipindahkan */
    }

    #whatsapp-button {
      background: #25d366;
      border: none;
      border-radius: 50%;
      /* Membuat tombol berbentuk lingkaran */
      padding: 10px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      /* Transisi untuk efek */
    }

    #whatsapp-button:hover {
      transform: scale(1.1);
      /* Membesarkan tombol saat hover */
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
      /* Efek bayangan saat hover */
    }

    #whatsapp-button:active {
      transform: scale(0.95);
      /* Mengecilkan tombol saat di-click */
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
      /* Efek bayangan saat di-click */
    }

    .whatsapp-icon {
      width: 70%;
      height: 70%;
    }

    .popup {
      position: absolute;
      bottom: 70px;
      /* Agar muncul di atas tombol WhatsApp */
      left: 50%;
      transform: translateX(-50%);
      background-color: white;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: none;
      width: 200px;
    }

    .popup p {
      margin: 0;
      font-size: 14px;
    }

    .chat-button {
      display: inline-block;
      margin-top: 10px;
      background: #25d366;
      color: white;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 3px;
      text-align: center;
    }

    /* Media queries untuk membuat tombol lebih kecil di layar yang lebih kecil */
    @media (max-width: 768px) {
      #whatsapp-button {
        width: 50px;
        height: 50px;
      }
    }

    @media (max-width: 480px) {
      #whatsapp-button {
        width: 40px;
        height: 40px;
      }

      .popup {
        width: 150px;
        bottom: 50px;
        /* Sesuaikan jarak pop-up */
      }
    }
  </style>
  <!-- end wa -->

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
  <script>
    // script.js
    const whatsappButton = document.getElementById('whatsapp-button');
    const whatsappPopup = document.getElementById('whatsapp-popup');
    const whatsappContainer = document.getElementById('whatsapp-container');

    let isDragging = false;
    let offsetX, offsetY;

    whatsappButton.addEventListener('mousedown', (e) => {
      isDragging = true;
      offsetX = e.clientX - whatsappContainer.getBoundingClientRect().left;
      offsetY = e.clientY - whatsappContainer.getBoundingClientRect().top;
      whatsappContainer.style.cursor = 'grabbing'; // Ubah kursor saat dragging
    });

    document.addEventListener('mousemove', (e) => {
      if (isDragging) {
        whatsappContainer.style.left = e.clientX - offsetX + 'px';
        whatsappContainer.style.top = e.clientY - offsetY + 'px';
        whatsappContainer.style.transform = 'none'; // Menonaktifkan transform agar tidak mempengaruhi posisi
      }
    });

    document.addEventListener('mouseup', () => {
      isDragging = false;
      whatsappContainer.style.cursor = 'grab'; // Kembali ke kursor normal
    });

    // Menampilkan dan menyembunyikan pop-up saat tombol diklik
    whatsappButton.addEventListener('click', () => {
      whatsappPopup.style.display = whatsappPopup.style.display === 'block' ? 'none' : 'block';
    });

    // Menyembunyikan pop-up jika pengguna mengklik di luar elemen
    document.addEventListener('click', (event) => {
      if (!whatsappButton.contains(event.target) && !whatsappPopup.contains(event.target)) {
        whatsappPopup.style.display = 'none';
      }
    });
  </script>
</body>

</html>