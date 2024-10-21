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

  <title>Company</title>

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
            <a class="nav-link fw-bolder @if(Request::is('/')) active @endif" href="/" onclick="setActive(this)">Beranda</a>
          </li>
          <li class="nav-item dropdown mx-3">
            <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('about')) active @endif" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false" onclick="setActive(this)">
              Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="about" onclick="setActive(this)">Pengelola</a></li>
              <li><a class="dropdown-item" href="team" onclick="setActive(this)">Tata Kelola</a></li>
              <li><a class="dropdown-item" href="testimonials" onclick="setActive(this)">Publikasi/Karir</a></li>
            </ul>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="services" onclick="setActive(this)">Layanan</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="portfolio" onclick="setActive(this)">Galeri</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link fw-bolder @if(Request::is('contact')) active @endif" href="contact" onclick="setActive(this)">Hubungi Kami</a>
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

    .nav-link.active {
      color: #ff4081;
      border-bottom: 2px solid #ff4081;
    }
  </style>

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
        <source src="assets/img/bg-judul.mp4" type="video/mp4">
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
    <div class="container">
      <h1 class="section-title">Nilai Nilai Dasar</h1>
      <div class="about-content">
        <p>Perseroan menyadari pentingnya penerapan tata kelola perusahaan guna menumbuhkan kepercayaan dari kreditur, nasabah, mitra bisnis, kreditur, pemegang saham dan para pemangku kepentingan (stakeholders) lainnya. Pelaksanaan tata kelola perusahaan di perseroan di dasarkan pada prinsip-prinsip keadilan, keterbukaan, akuntabilitas, dan tanggung jawab. Dalam sepuluh tahun terakhir,konsep Good Corporate Governance (GCG) atau Tata Kelola Perusahaan telah di tempatkan pada posisi yang strategis di berbagai perusahaan, serta memberikan manfaat jangka panjang, sekaligus memenangkan persaingan bisnis. Kegagalan dalam penerapan GCG dapat menjadi penyebab utama kegagalan perusahaan untuk bertahan dalam persaingan bisnis.</p>
        <p>Sesuai dengan peraturan Otoritas Jasa Keuangan Nomor 30/POJK.05/2014, bahwa dalam rangka meningkatkan kinerja perusahaan, melindungi kepentingan stakeholders dan meningkatkan kepatuhan terhadap peraturan perundang-undangan serta nilai-nilai etika (code of conduct) yang berlaku secara umum pada industry pembiayaan, persahaan wajib melaksanakan kegiatan usahanya dengan berpedoman pada prinsip GCG. Pelaksanaan GCG pada industry pembiayaan harus senantiasa berlandaskan pada lima prinsip dasar, yaitu:</p>
        <li>Transparansi (transparency)</li>
        <li>Akuntabilitas (accountability)</li>
        <li>Pertanggung jawaban (responsibility)</li>
        <li>Independensi (independency)</li>
        <li>Kewajaran (fairness)</li>
        <p>Pelaksanaan GCG harus diterapkan pada seluruh pengurus dan pegawai Perusahaan mulai dari dewan Komisaris, Direksi, sampai dengan pegawai tingkat pelaksana.</p>
        <h4>Penerapan Tata Kelola Perusahaan yang baik bertujuan untuk:</h4>
        <ul>
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
      </div>
    </div>
  </section>

  <!-- pdf investor -->
  <div class="pdf-button-container">
    <h4>Informasi Laporan Terbaru</h4>
    <p>Laporan Keberlanjutan.</p>
    <a href="https://gratama-finance.co.id/pdf/Laporan%20keberlanjutan%202021.pdf" class="pdf-download-btn">Tahun 2021</a>
    <a href="https://gratama-finance.co.id/pdf/RAKB%202022.pdf" class="pdf-download-btn">Tahun 2022</a>
    <a href="https://gratama-finance.co.id/pdf/RAKB%202023%20Pembiayaan%20Kendaraan%20Bertenaga%20Listrik.pdf" class="pdf-download-btn">Tahun 2023</a>
    <!-- 
     -->
  </div>

  <style>
    .pdf-button-container {
      text-align: center;
      margin: 20px 0;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pdf-button-container h4 {
      color: #007bff;
      margin-bottom: 10px;
      font-size: 30 px;
    }

    .pdf-button-container p {
      margin-bottom: 15px;
      color: #555;
      font-size: 14px;
    }

    .pdf-download-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .pdf-download-btn:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }
  </style>

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
  <!-- footer -->
  <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5 ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <h4 class="fw-bold">{{$contact->name}}</h2>
              <p>
                {{$contact->description}}
              </p>
              <strong>Phone</strong> : <span>{{$contact->telepon}} </span>
              <br />
              <strong>Email</strong> : <span>{{$contact->email}} </span>
          </div>
          <div class="col-md-2">
            <h4 class="fw-bold">Our Services</h2>
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
            <h4 class="fw-bold">Useful Links</h2>
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
            <h4 class="fw-bold">Join Our Newsletter</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
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
              &copy; Copyright <strong>Company</strong>. All Right Reserved
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
      padding: 50px 20px;
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
      background-color: rgba(0, 0, 0, 0.6);
      /* Overlay hitam transparan di belakang teks */
      padding: 30px;
      /* Memberikan padding di dalam konten */
      border-radius: 10px;
      /* Membuat sudut konten melengkung */
      color: #fff;
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