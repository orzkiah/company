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
  <title>Company</title>
</head>

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
    .navbar {
      border-radius: 0 0 100px 0;
      overflow: visible;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      /* Menyelaraskan item secara vertikal */
    }

    .nav-item {
      margin: 0 10px;
      /* Menyesuaikan jarak horizontal antara item */
    }

    .nav-link {
      padding: 10px 15px;
      /* Menambahkan padding pada link untuk area klik yang lebih baik */
    }

    .nav-link.active {
      color: #ff4081;
      border-bottom: 2px solid #ff4081;
    }

    .marquee-container {
      overflow: hidden;
      white-space: nowrap;
      width: 250px;
      /* Sesuaikan lebar sesuai kebutuhan */
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
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
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

  <!-- end navbar -->
  <!-- breadcumbs  -->
  <!-- <div class="breadcumbs py-2">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center text-white"> -->
  <!-- <h2>Portfolio</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Portfolio</li> -->
  <!-- </ol>
  </div>
  </div>
  </div> -->
  <!-- end breadcumbs -->

  <!-- teams -->
  <div class="teams bg-light py-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Galeri KSKC</h2>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
          <ul class="list-unstyled d-flex portfolio-filters">
            <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
            <li data-filter=".filter-design" class="py-2 px-4">Video</li>
          </ul>
        </div>
      </div>
      <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero
        voluptas ea molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repeliendus enim
        incidunt assumenda pariatur, quisquam evaniet numquam.</p>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="mansory portfolio-container">
            <div class="mansory-sizer"></div>
            @foreach ($portfolio as $item)
            <div class="mansory-item m-2 portfolio-item filter-web">
              <img src="image/{{$item->image}}" alt="" class="img-fluid" />
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 20px;
    }

    .video-gallery {
      background-color: #f8f9fa;
      padding: 40px 0;
      max-width: 1200px;
      margin: auto;
    }

    .gallery-title {
      text-align: center;
      font-size: 28px;
      color: #333;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
      padding: 0 15px;
    }

    .video-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      background: #000;
    }

    .video-item video {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .video-item:hover {
      transform: scale(1.05);
    }

    .video-item:hover video {
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .gallery-container {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <!-- <div class="video-gallery">
    <h2 class="gallery-title">VIDEO GALLERY</h2>
    <div class="gallery-container">
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GoKendari.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Kendari</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/MAP_GFI.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">Gratama Finance Indonesia
          </h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GFI 44_Balikpapan.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Balikpapan</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/samarinda.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Samarinda</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GO_Banjarmasin.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">KSKC Banjarmasin</h3>
        </div>
      </div>
      <div class="video-item">
        <div class="video-card">
          <video controls>
            <source src="assets/img/GO_DURI_54.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <h3 class="video-title">
            KSKC Duri</h3>
        </div>
      </div>
    </div>
  </div> -->


  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .teams {
      background-color: #f8f9fa;
      padding: 40px 0;
    }

    .title-container h2 {
      font-size: 28px;
      color: #333;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .portfolio-filters {
      display: flex;
      gap: 15px;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .portfolio-filters li {
      cursor: pointer;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: #6c757d;
      color: white;
      transition: background-color 0.3s ease;
    }

    .portfolio-filters li.filter-active {
      background-color: #007bff;
    }

    .portfolio-filters li:hover {
      background-color: #0056b3;
    }

    .mansory {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 15px;
    }

    .mansory-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .mansory-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
      border-radius: 10px;
    }

    .mansory-item:hover {
      transform: scale(1.05);
    }

    .mansory-item:hover img {
      transform: scale(1.1);
    }

    .text-center {
      text-align: center;
    }

    .py-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }

    .mt-4 {
      margin-top: 1.5rem !important;
    }

    .mt-5 {
      margin-top: 3rem !important;
    }

    .bg-light {
      background-color: #f8f9fa !important;
    }

    .container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .video-gallery {
      padding: 20px;
      background-color: #f9f9f9;
    }

    .gallery-title {
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .video-item {
      display: flex;
      justify-content: center;
    }

    .video-card {
      background-color: #fff;
      border-radius: 8px;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .video-card video {
      width: 100%;
      border-radius: 8px;
    }

    .video-title {
      margin-top: 10px;
      font-size: 16px;
      color: #333;
      font-weight: bold;
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

  <!-- end teams -->

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
                  <a href="abouts" class="text-decoration-none text-white">
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
              &copy; Copyright <strong>orzkiah</strong>. All Right Reserved
            </div>
            <div class="credits">
              Design by me
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-links float-end">
              <a href="" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
              <!-- <a href="" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a> -->
              </a>
            </div>
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