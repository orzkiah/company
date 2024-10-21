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
      <p class="text-center mb-5">
        Komitmen Dewan Komisaris dalam Mengawasi dan Mendorong Pertumbuhan Perusahaan
      </p>

      <div class="row">
        <!-- First section: 2 images -->
        @for ($i = 1; $i <= 2; $i++)
          @if (isset($teams[$i]))
          <div class="col-md-6 d-flex justify-content-center mb-4">
          <div class="team-card">
            <img src="image/{{$teams[$i]->image}}" class="team-img rounded-circle" alt="...">
            <div class="team-body text-center">
              <h5 class="team-title fw-bold">{{$teams[$i]->title}}</h5>
              <p class="team-text text-muted">{{$teams[$i]->description}}</p>
            </div>
          </div>
      </div>
      @endif
      @endfor

      <!-- Middle section: 1 image -->
      <div class="col-12 d-flex justify-content-center mb-4">
        @if (isset($teams[0]))
        <div class="team-card">
          <img src="image/{{$teams[0]->image}}" class="team-img rounded-circle" alt="...">
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
          <img src="image/{{$teams[$i]->image}}" class="team-img rounded-circle" alt="...">
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

  <style>
    .teams {
      background-image: url('assets/img/bg-team.jpg');
      /* Ganti dengan path gambar yang sesuai */
      background-size: cover;
      /* Mengatur gambar agar menutupi seluruh area */
      background-position: center;
      /* Memposisikan gambar di tengah */
      padding: 40px 0;
      /* Menambahkan padding untuk ruang atas dan bawah */
      color: black;
      /* Mengatur warna teks agar terlihat di atas background */
    }

    .team-card {
      border: none;
      /* Menghilangkan border */
      box-shadow: none;
      /* Jika ada bayangan, hilangkan juga */
      background: none;
      /* Jika ada background, jadikan transparan */
    }
  </style>

  <!-- end teams -->
  <!-- clients -->
  <div class="clients mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Merek Kendaraan Pembiayaan</h2>
      </div>
      <div class="row mt-5">
        @foreach($clients as $client)
        <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
          <img src="image/{{$client->image}}" class="img-fluid brand-image" alt="" />
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- end clients -->
  <!-- WA -->

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
                  <a href="#" class="text-decoration-none text-white">
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