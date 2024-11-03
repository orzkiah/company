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
  <div class="teams bg-light py-8">
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

  <div class="video-gallery">
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
  </div>


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


  <!-- end teams -->

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

</body>

</html>