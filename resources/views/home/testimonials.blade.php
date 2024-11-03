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

</body>

</html>