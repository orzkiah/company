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
  <title>PT. Gratama</title>
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

  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      @foreach ($sliders as $index => $slider)

      <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
        <img src="assets/img/{{$slider->image}}" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>{{$slider->title}}</h5>
          <p>{{$slider->description}}
          </p>
        </div>
      </div>
      @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->
  <!-- Banner End -->

  <!-- about us -->
<div class="about-us mt-5 about-background">
    <div class="container">
        <div class="title-container text-center">
            <h2 class="fw-bold">TENTANG KAMI</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-6" data-aos="fade-right">
                <center>
                    <h1 class="fw-bold about-us-title">
                        {{$about->judul}}
                    </h1>
                </center>
                <center>
                    <p class="fw-bolder mt-4 about-us-subtitle">
                        {{$about->subjudul}}
                    </p>
                </center>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>
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
    </div>
</div>


  <style>
    .about-background {
      background-image: url('assets/img/bg-port.jpg');
      /* Ganti dengan path gambar yang sesuai */
      background-size: cover;
      /* Mengatur gambar agar menutupi seluruh area */
      background-position: center;
      /* Memposisikan gambar di tengah */
      padding: 40px 0;
      /* Menambahkan padding untuk ruang atas dan bawah */
      color: black;
      /* Mengatur warna teks agar terlihat di atas background */
      border-radius: 0 0 0 0;
      /* Lengkungan bervariasi pada sudut */
      overflow: hidden;
      /* Agar konten tidak keluar dari area lengkung */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      /* Menambahkan bayangan agar terlihat lebih elegan */
    }

    .about-us-title {
      font-size: 1px;
    }

    .about-us-title,
    .about-us-subtitle {
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.0);
      /* Menambahkan efek bayangan pada teks agar lebih terbaca */
      font-family: "Poppins", sans-serif;
      font-weight: 100;
      font-style: normal;
      font-size: 25px;
    }

    .list-group-item {
      color: black;
      /* Mengatur warna item dalam list */
      border-radius: 0 0 20px 20px;
      /* Membuat lengkungan hanya pada sudut bawah */
      overflow: hidden;
      background: linear-gradient(45deg, #f8f9fa, #e9ecef);
      /* Efek gradasi untuk tampilan lebih estetik */
    }

    /* Marquee Styling */
    .marquee {
      background-color: rgba(255, 255, 255, 0.1);
      /* Warna latar belakang marquee agar lebih terlihat */
      padding: 5px;
      /* Menambahkan padding pada marquee */
      border-radius: 5px;
      /* Membuat sudut melengkung */
    }
  </style>
  <!-- end about us -->

  <!-- services -->
  <div class="services mt-5 bg-light py-5">
  <div class="container">
    <div class="title-container text-center">
      <h2 class="fw-bold">PRODUK DAN LAYANAN</h2>
    </div>
    <div class="row mt-8" id="accordionServices">
      @foreach($services as $service)
      <div class="col-md-4">
        <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" 
             data-bs-toggle="collapse" 
             data-bs-target="#collapse{{ $service->id }}" 
             role="button" 
             aria-expanded="false" 
             aria-controls="collapse{{ $service->id }}">
          <div class="card-body">
            <div class="card-icon">
              <img src="image/{{$service->image}}" alt="" class="img-fluid" width="80">
            </div>
            <div class="card-title fw-bolder mt-4">
              <span class="text-decoration-none text-dark">
                {{$service->title}}
              </span>
            </div>
            <!-- Konten yang akan di-collapse -->
            <div class="collapse mt-3" id="collapse{{ $service->id }}">
              <ul class="card-description" style="text-align: left;">
                @foreach(explode("\n", $service->description) as $item)
                  <li>{{ trim($item) }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>



      <!-- PRODUK DAN LAYANAN -->
      <style>
        .card[role="button"] {
        cursor: pointer;
        }

        .card[role="button"]:hover {
        transform: scale(1.03);
        transition: transform 0.2s ease-in-out;
        }


        #card:hover {
          transform: scale(1.04);
        }
        .services {
          background-image: url('assets/img/bg-about1.jpg');
          /* Atur URL gambar */
          background-size: cover;
          /* Agar gambar menutupi seluruh area */
          background-position: center;
          /* Fokus pada pusat gambar */
          background-repeat: no-repeat;
          /* Tidak mengulang gambar */
          padding: 50px 0;
          /* Memberi jarak vertikal */
          border-radius: 0 0 130px 0;
          /* Lengkungan bervariasi pada sudut */
          overflow: hidden;
          /* Agar konten tidak keluar dari area lengkung */
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
          /* Menambahkan bayangan agar terlihat lebih elegan */
        }

        .card {
          background-color: rgba(255, 255, 255, 0.9);
          /* Memberikan latar belakang putih semi-transparan pada card */
          border-radius: 10px;
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .title-container h2 {
          color: black;
          /* Mengubah warna judul menjadi putih */
        }

        .title-container p {
          color: white;
          /* Mengubah warna paragraf menjadi putih */
        }

        /* Jika Anda ingin semua teks dalam section ini putih */
        .text-center {
          color: black;
        }
      </style>
    </div>
  </div>
  <!-- end services -->

        <!-- portfolio -->

        <!-- end portfolio -->

  <!-- clients -->
      <div class="clients mt-5">
  <div class="container">
    <div class="title-container">
      <h2 class="text-center fw-bold">Merek Kendaraan Pembiayaan</h2>
    </div>
    <div class="slider mt-5">
      @foreach($clients as $client)
      <div class="text-center">
        <img src="image/{{$client->image}}" class="img-fluid brand-image" alt="" />
      </div>
      @endforeach
    </div>
  </div>
</div>

  <style>
    .clients {
      /* background-image: url('assets/img/bg-merek.jpg'); */
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

    /* Atur ukuran logo agar lebih kecil */
.brand-image {
    max-width: 100px; /* Atur ukuran maksimal untuk logo, bisa disesuaikan */
    height: auto;     /* Membiarkan height auto agar proporsional */
    margin: auto;     /* Agar gambar tetap berada di tengah */
    display: block;   /* Pastikan gambar menjadi elemen block agar mudah diatur */
}

/* Tambahkan padding jika ingin memberikan ruang lebih di sekeliling logo */
.col-md-3 {
    padding-top: 50px;
}

/* Jika diperlukan, atur ukuran grid agar responsif */
@media (max-width: 768px) {
    .col-md-3 {
        width: 50%;  /* Mengatur agar gambar lebih besar di layar kecil */
    }
}

@media (max-width: 576px) {
    .col-md-3 {
        width: 100%; /* Gambar full width di layar sangat kecil */
    }
}

.slider .text-center {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;           /* Menyembunyikan overflow agar tidak ada yang terpotong */
}

.slider .brand-image {
  max-width: 100%;            /* Maksimal lebar gambar 100% */
  max-height: 100px;          /* Atur tinggi maksimal gambar agar seragam */
  object-fit: contain;        /* Menjaga proporsi asli gambar tanpa terpotong */
}


  </style>
  <!-- end clients -->

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
  <div class="footer-top bg-dark text-white p-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 ">
          <h4 class="fw-bold">{{ $contact->name }}</h4>
          <p>{{ $contact->description }}</p>
          <p><strong>Telp :</strong> {{ $contact->telepon }}</p>
          <p><strong>Email:</strong> {{ $contact->email }}</p>
        </div>
        
        <div class="col-md-2 mt-5">
          <h4 class="fw-bold">Layanan Kami</h4>
          <ul class="list-group list-unstyled">
            @foreach($services as $service)
            <li class="list-item">
              <a href="#" class="text-decoration-none text-white">
                <i class="fa fa-chevron-right primary"></i> {{ $service->title }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="col-md-2 mt-5">
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

        <div class="col-md-3">
          <!-- <p>Logo perusahaan.</p> -->
          <div class="col-md-4 d-flex flex-column align-items-center">
          <div class="logo-top mb-3">
            <img src="assets/img/logoG2.png" alt="Logo G2" class="img-fluid logo-bordered" style="max-width: 328%;">
          </div>
          <div class="logo-bottom d-flex justify-content-between w-100">
            <img src="assets/img/laps-logo.png" alt="Logo LAPS" class="img-fluid logo-bordered" style="max-width: 148%;">
            <img src="assets/img/logo-appi.png" alt="Logo APPI" class="img-fluid logo-bordered" style="max-width: 148%;">
          </div>
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
          <div>&copy; 2024 <strong>orzkiah</strong>. All Rights Reserved.</div>
          <div>Design by me</div>
        </div>
        <div class="col-md-5 text-end">
          <a href="#" class="text-white mx-2">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <style>
  /* Background foto pada footer */
  .footer-top {
    background-image: url('assets/img/194.jpg'); /* Ganti dengan path gambar yang Anda inginkan */
    background-size: cover;
    background-position: center;
    color: white;
    position: relative;
  }

  /* Overlay agar teks lebih jelas */
  .footer-top::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.85); /* Lapisan gelap transparan */
    z-index: 1;
  }

  /* Untuk memastikan konten berada di atas overlay */
  .footer-top .container-fluid {
    position: relative;
    z-index: 2;
  }
</style>
</footer>


  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const collapsibles = document.querySelectorAll('.collapse');

    collapsibles.forEach(collapse => {
      collapse.addEventListener('show.bs.collapse', function() {
        collapsibles.forEach(otherCollapse => {
          if (otherCollapse !== collapse) {
            new bootstrap.Collapse(otherCollapse, {
              toggle: false
            }).hide();
          }
        });
      });
    });
  });
</script>
    
  <script>
    function calculateLoan() {
      const loanAmount = parseFloat(document.getElementById("loanAmount").value);
      const interestRate = parseFloat(document.getElementById("interestRate").value);
      const loanTerm = parseFloat(document.getElementById("loanTerm").value);

      if (isNaN(loanAmount) || isNaN(interestRate) || isNaN(loanTerm)) {
        document.getElementById("result").innerText = "Mohon masukkan semua nilai.";
        return;
      }

      const monthlyInterestRate = (interestRate / 100) / 12;
      const numberOfPayments = loanTerm;
      const monthlyPayment = loanAmount * monthlyInterestRate / (1 - (Math.pow(1 + monthlyInterestRate, -numberOfPayments)));

      if (isNaN(monthlyPayment)) {
        document.getElementById("result").innerText = "Perhitungan tidak valid.";
      } else {
        // Format hasil perhitungan dengan titik sebagai pemisah ribuan
        const formattedPayment = monthlyPayment.toLocaleString('id-ID', {
          style: 'currency',
          currency: 'IDR'
        });
        document.getElementById("result").innerText = `Cicilan Bulanan: ${formattedPayment}`;
      }
    }
  </script>

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

  <!-- to top -->
  <a href="#" class="btn-to-top p-3 scrollup" id="scroll-up">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- end to top -->
<script>
  const scrollUp = () => {
    const scrollUp = document.getElementById("scroll-up");
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
    this.scrollY >= 350
        ? scrollUp.classList.add("show-scroll")
        : scrollUp.classList.remove("show-scroll");
};
window.addEventListener("scroll", scrollUp);
</script>
<!-- jQuery (dibutuhkan untuk slick carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JavaScript slick carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.slider').slick({
      slidesToShow: 4,              // Jumlah logo per slide
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: false,
      infinite: true,
      cssEase: 'linear',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  });
</script>
</body>
</html>