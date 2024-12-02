<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logogratamaIcon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
     <!-- right menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>

    <title>PT. Gratama Finance Indonesia</title>


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
            <li><a class="dropdown-item" href="kelola">Tata Kelola</a></li>
            <li><a class="dropdown-item" href="publikasi">Publikasi</a></li>
            <li><a class="dropdown-item" href="{{ url('/laporan') }}">Laporan</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('portfolio')) active @endif" href="galeri">Galeri</a>
        </li>
         <li class="nav-item mx-3">
          <a class="nav-link fw-bolder @if(Request::is('services')) active @endif" href="karir">Karir</a>
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
    <!-- end navbar -->

    <!-- breadcumbs  -->
    <div class="breadcumbs py-1">
        <div class="container">
            <!-- <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Contact</h2>
                <ol class="d-flex list-unstyled">
                    <li>Beranda</li>
                    <li>Hubungi Kami</li>
                </ol>
            </div> -->
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- contact -->

    <div class="contact mb-5">
        <!-- <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2984422314157!2d106.80011989269681!3d-6.224323848825773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f151d39060cf%3A0x2c8a30f63cb1757d!2sPlaza%20Asia!5e0!3m2!1sid!2sid!4v1725617383481!5m2!1sid!2sid"
                width="1900" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
        <div class="container-1 mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <center>
                                    <h1>Peta Indonesia dengan Lokasi KSKC</h1>
                                </center>
                                <div id="map"></div>

                                <!-- Leaflet JavaScript -->
                                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                                <style>
        #map {
            height: 500px; /* Tentukan tinggi peta */
            border-radius: 25px; /* Melengkungkan sudut */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan jika diinginkan */
        }
</style>
                                <script>
                                    // Inisialisasi peta dan set view ke Indonesia
                                    var map = L.map('map', {
                                        zoomControl: false
                                    }).setView([-2.5489, 118.0149], 5);


                                    // Tambahkan tile layer ke peta
                                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                        attribution: '© OpenStreetMap contributors'
                                    }).addTo(map);

                                    // Data alamat Kantor KSKC (latitude, longitude, dan nama)
                                    var cabang = [{
                                            lat: -6.22537058243089,
                                            lon: 106.80509516765372,
                                            name: "Kantor KSKC Jakarta"
                                        },
                                        {
                                            lat: -7.4615315,
                                            lon: 112.7143673,
                                            name: "Kantor KSKC Surabaya"
                                        },
                                        {
                                            lat: -6.9413703,
                                            lon: 107.6563096,
                                            name: "Kantor KSKC Bandung"
                                        },
                                        {
                                            lat: -5.1601724,
                                            lon: 119.4464177,
                                            name: "Kantor KSKC Makassar"
                                        },
                                        {
                                            lat: -6.2473894,
                                            lon: 106.9688129,
                                            name: "Kantor KSKC Bekasi"
                                        },
                                        {
                                            lat: -6.5997054,
                                            lon: 106.8176691,
                                            name: "Kantor KSKC Bogor"
                                        },
                                        {
                                            lat: -6.2956631,
                                            lon: 107.150167,
                                            name: "Kantor KSKC Cikarang"
                                        },
                                        {
                                            lat: -6.711259,
                                            lon: 108.5453417,
                                            name: "Kantor KSKC Cirebom"
                                        },
                                        {
                                            lat: -6.403747,
                                            lon: 106.8361516,
                                            name: "Kantor KSKC Depok"
                                        },
                                        {
                                            lat: -6.2439008,
                                            lon: 106.5218335,
                                            name: "Kantor KSKC Cikupa"
                                        },
                                        {
                                            lat: -6.1997662,
                                            lon: 106.6180957,
                                            name: "Kantor KSKC Tangerang"
                                        },
                                        {
                                            lat: -6.9884874,
                                            lon: 110.4289889,
                                            name: "Kantor KSKC Serang"
                                        },
                                        {
                                            lat: -7.4161099,
                                            lon: 109.2348229,
                                            name: "Kantor KSKC Purwokerto"
                                        },
                                        {
                                            lat: -7.559166,
                                            lon: 110.7982125,
                                            name: "Kantor KSKC Solo"
                                        },
                                        {
                                            lat: -6.8803901,
                                            lon: 109.1336577,
                                            name: "Kantor KSKC Tegal"
                                        },
                                        {
                                            lat: -8.2281349,
                                            lon: 114.3583992,
                                            name: "Kantor KSKC Banyuwangi"
                                        },
                                        {
                                            lat: -8.174053,
                                            lon: 113.6354294,
                                            name: "Kantor KSKC Jember"
                                        },
                                        {
                                            lat: -7.8133869,
                                            lon: 112.0052636,
                                            name: "Kantor KSKC Kediri"
                                        },
                                        {
                                            lat: -7.6218657,
                                            lon: 111.5313652,
                                            name: "Kantor KSKC Malang"
                                        },
                                        {
                                            lat: -7.9648235,
                                            lon: 112.6316488,
                                            name: "Kantor KSKC Madiun"
                                        },
                                        {
                                            lat: -7.514872,
                                            lon: 112.4306125,
                                            name: "Kantor KSKC Mojokerto"
                                        },
                                        {
                                            lat: -7.4611454,
                                            lon: 112.7134872,
                                            name: "Kantor KSKC Sidoarjo"
                                        },
                                        {
                                            lat: -7.2838352,
                                            lon: 112.7777819,
                                            name: "Kantor KSKC Surabaya "
                                        },
                                        {
                                            lat: -7.2838352,
                                            lon: 112.7777819,
                                            name: "Kantor KSKC Surabaya "
                                        },
                                        {
                                            lat: -7.7990271,
                                            lon: 110.3705421,
                                            name: "Kantor KSKC Yogyakarta "
                                        },
                                        {
                                            lat: -8.6760831,
                                            lon: 115.2154412,
                                            name: "Kantor KSKC Bali "
                                        },
                                        {
                                            lat: -8.5946504,
                                            lon: 116.1376801,
                                            name: "Kantor KSKC Nusa Tenggara Barat "
                                        },
                                        {
                                            lat: -1.6248007,
                                            lon: 103.5944267,
                                            name: "Kantor KSKC Jambi "
                                        },
                                        {
                                            lat: -4.1164921,
                                            lon: 104.1772898,
                                            name: "Kantor KSKC Baturaja "
                                        },
                                        {
                                            lat: -0.9342018,
                                            lon: 100.3631127,
                                            name: "Kantor KSKC Padang "
                                        },
                                        {
                                            lat: -3.8253459,
                                            lon: 102.241064,
                                            name: "Kantor KSKC Bengkulu "
                                        },
                                        {
                                            lat: -2.1925779,
                                            lon: 106.1019844,
                                            name: "Kantor KSKC Pangkal Pinang "
                                        },
                                        {
                                            lat: 0.4790406,
                                            lon: 101.3918459,
                                            name: "Kantor KSKC Pekan Baru "
                                        },
                                        {
                                            lat: -5.3889962,
                                            lon: 105.2371069,
                                            name: "Kantor KSKC Bandar Lampung "
                                        },
                                        {
                                            lat: -4.0177466,
                                            lon: 119.6216909,
                                            name: "Kantor KSKC Pare - Pare "
                                        },
                                        {
                                            lat: -3.0172416,
                                            lon: 120.2054064,
                                            name: "Kantor KSKC Palopo "
                                        },
                                        {
                                            lat: 1.4909234,
                                            lon: 124.8602914,
                                            name: "Kantor KSKC Manado "
                                        },
                                        {
                                            lat: -0.935529,
                                            lon: 119.8966807,
                                            name: "Kantor KSKC Palu "
                                        },
                                        {
                                            lat: -0.0616129,
                                            lon: 109.2703619,
                                            name: "Kantor KSKC Pontianak "
                                        },
                                        {
                                            lat: -2.2136349439404963,
                                            lon: 113.90589926494951,
                                            name: "Kantor KSKC Palangkaraya "
                                        },
                                        {
                                            lat: -1.2591706,
                                            lon: 116.8576581,
                                            name: "Kantor KSKC Balikpapan "
                                        },
                                        {
                                            lat: -1.2591706,
                                            lon: 116.8576581,
                                            name: "Kantor KSKC Balikpapan "
                                        },
                                        {
                                            lat: -0.4662538,
                                            lon: 117.1717114,
                                            name: "Kantor KSKC Samarinda "
                                        },
                                    ];
                                    // Tambahkan marker untuk setiap Kantor KSKC
                                    cabang.forEach(function(location) {
                                        L.marker([location.lat, location.lon])
                                            .addTo(map)
                                            .bindPopup(`<b>${location.name}</b>`);
                                    });
                                </script>

                                <style>
                                    .container-1 {
                                        background-image: url('assets/img/bg-port3.jpg');
                                        /* Ganti dengan path gambar Anda */
                                        background-size: cover;
                                        /* Mengatur ukuran gambar agar menutupi seluruh div */
                                        background-position: center;
                                        /* Menempatkan gambar di tengah */
                                        background-repeat: no-repeat;
                                        /* Gambar tidak akan diulang */
                                        padding: 50px 0;
                                        /* Tambahkan padding untuk memberi jarak pada konten */
                                        color: black;
                                        /* Mengubah warna teks menjadi putih agar kontras dengan background */
                                    }

                                    .leaflet-control-zoom {
                                        margin-top: 60px;
                                        /* Sesuaikan dengan tinggi navbar */
                                    }
                                </style>

                                <div class="row">
                                    <!-- Informasi Kontak Utama -->
                                    <div class="col-md-4">
                                        <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Kantor Pusat</h4>
                                        <p class="ms-5">{{$contact->alamat}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Email</h4>
                                        <p class="ms-5">{{$contact->email}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Phone</h4>
                                        <p class="ms-5">{{$contact->telepon}}</p>
                                    </div>
                                </div>


                                <!-- Tambahan Halaman untuk Kantor KSKC -->
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="container mt-2">
                                            <center>
                                                <h2 class="fw-bolder" style="margin: 20px 0;">KSKC</h2>
                                            </center>


                                        <div class="row">
                                                <!-- Jawa Barat -->
                                                <div class="col-md-8 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Jawa Barat</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang </p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address1')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address1" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Bandung</h5>
                                                        <p class="ms-5">Ruko Metro Trade Center Blok D No. 19 Jl. Soekarno Hatta No. 590, Buah Batu, Suka Jadei, Jawa Barat, 40286</p>
                                                        <h5 class="fw-bolder">Bekasi</h5>
                                                        <p class="ms-5">JL. KH Noer Ali Blok A2 No 1-2 Ruko Duta Permai, kel.Bekasi Barat, kec.Jakasampurna, Bekasi, 17145</p>
                                                        <h5 class="fw-bolder">Bogor</h5>
                                                        <p class="ms-5">JL.Kol. Ahmad Syam Rt.04/Rw.06 Kp.Sawah, kel.Tanah Baru, kec.Bogor Utara, Bogor, 16154</p>
                                                        <h5 class="fw-bolder">Cikarang</h5>
                                                        <p class="ms-5">Kawasan Industri Jababeka Tahap II Ruko Metro Boulevard Blok A-22, kel. Pasirkali, kec. Cikarang Selatan, Bekasi, Jawa Barat, 17530</p>
                                                        <h5 class="fw-bolder">Cirebon</h5>
                                                        <p class="ms-5">JL. Tuparev Ruko Cirebon Bisnis Center Blok B.4 Ds.Kertawinangun, kec.Kedaung kab.Cirebon, Jawa Barat, 45153</p>
                                                        <h5 class="fw-bolder">Depok</h5>
                                                        <p class="ms-5">Ruko Sukmajaya Jl.Tole Iskandar No.34 Kav.11, kel. Sukmajaya, Depok, Jawa Barat, 16412</p>
                                                    </div>
                                                </div>

                                                <!-- Banten -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Banten</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address2')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address2" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Cikupa</h5>
                                                        <p class="ms-5">Jl.Citra Raya Utama Timur, Ruko Mardi Grass Blok KC.02 No.02, Cikupa, Banten, kota Tangerang, 15710</p>
                                                        <p class="ms-5">Telp : 021 5966 6504</p>
                                                        <h5 class="fw-bolder">Tangerang</h5>
                                                        <p class="ms-5">Jl.Raya Imam Bonjol, Ruko Victoria Park Blok A2 No.50, kel.Bojong Jaya, Kec.karawaci, Tangerang, Banten, 15116</p>
                                                        <p class="ms-5">Telp : 021-55738968</p>
                                                        <h5 class="fw-bolder">Serang</h5>
                                                        <p class="ms-5">Jl.MT. Haryono 517 J (Stadion Utara), kel.Karangkidul, kec.Semarang Tengah, Semarang, 50241</p>
                                                        <p class="ms-5">Telp : (024) 76444175</p>
                                                    </div>
                                                </div>

                                                <!-- Jawa Tengah -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Jawa Tengah</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address3')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address3" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Purwokerto</h5>
                                                        <p class="ms-5">JL.Ruko Karang Kobar Simpang Dr.Angka RT.01 RW.08, kel.sokanegara, kec.Purwokerto Timur, Purwokerto, Jawa Tengah, 53115</p>
                                                        <p class="ms-5">Telp : 0281-621.023</p>
                                                        <h5 class="fw-bolder">Semarang</h5>
                                                        <p class="ms-5">Jl.MT. Haryono 517 J (Stadion Utara), kel.Karangkidul, kec.Semarang Tengah, Semarang, 50241</p>
                                                        <p class="ms-5">Telp :(024) 76444175</p>
                                                        <h5 class="fw-bolder">Solo</h5>
                                                        <p class="ms-5">Jl. Rajawali I Ruko Blok B10 Pasar Raya, kel.Gentan, kecBaki, Surakarta Solo, 57194</p>
                                                        <p class="ms-5">Telp :0271 731848</p>
                                                        <h5 class="fw-bolder">Tegal</h5>
                                                        <p class="ms-5">Ruko Sultan Square N0.11, JL. Sultan Agung, Tegal Timur, Slerok, 52125</p>
                                                        <p class="ms-5">Telp (0283)-4539213</p>
                                                    </div>
                                                </div>
                                                <hr>

                                                <!-- Jawa Timur -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Jawa Timur</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address4')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address4" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Banyuwangi</h5>
                                                        <p class="ms-5">Jl. Agus Salim No 07, Tamanbaru, Banyuwangi, Jawa Timur, 68417</p>
                                                        <h5 class="fw-bolder">Jember</h5>
                                                        <p class="ms-5">Jl.Gatot Subroto No.40, kel.kepatihan, kec.kaliwates, Jember, Jawa Timur, 68131,</p>
                                                        <p class="ms-5">Telp : 0331-3010510</p>
                                                        <h5 class="fw-bolder">Kediri</h5>
                                                        <p class="ms-5">Ruko Brawijaya 44 No.24 JL.Brawijaya, kel.Pocanan, kec.Kota Kediri, Kediri, Jawa Timur 23372</p>
                                                        <h5 class="fw-bolder">Malang</h5>
                                                        <p class="ms-5">Ruko Sun City, Blok C16 Jalan S. Parman No 08, Oro-Oro Ombo, Kec. Kartoharjo,Kota Madiun, Jawa Timur, 63119</p>
                                                        <h5 class="fw-bolder">Madiun</h5>
                                                        <p class="ms-5">Jl.W.R Supratman C2 KAV.1 RT.01 RW.02, Kel.Rampal Claket, Kec. Klojen, Malang, Jawa Timur, 65111,</p>
                                                        <p class="ms-5">Telp : 0341 3019977</p>
                                                        <h5 class="fw-bolder">Mojokerto</h5>
                                                        <p class="ms-5">Jl.Jayanegara No.199 A, Kel.Banjaragung, Kec.Puri, Kab.MOJOKERTO, Jawa Timur, 61363,</p>
                                                        <p class="ms-5">Telp : 0921 5292 678</p>
                                                        <h5 class="fw-bolder">Sidoarjo</h5>
                                                        <p class="ms-5">JL.KH.Mukmin Ruko Citra Indah Blok RE-18, kel.Sidokare, kec.Sidoarjo, Jawa timur, 61214,</p>
                                                        <p class="ms-5">Telp 031 - 99702465</p>
                                                        <h5 class="fw-bolder">Surabaya 1</h5>
                                                        <p class="ms-5">JL.KH.Mukmin Ruko Citra Indah Blok RE-18, kel.Sidokare, kec.Sidoarjo, Jawa timur, 61214,</p>
                                                        <p class="ms-5">Telp 031 - 99702465</p>
                                                        <h5 class="fw-bolder">Surabaya 2</h5>
                                                        <p class="ms-5">Ruko Mega Galaxy No.16C/20, kel. Klampis Asem, kec.Sukolilo, Surabaya, Jawa timur, 60111,</p>
                                                        <p class="ms-5">Telp 031-5913079</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- DIY -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">D.I.Y</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address5')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address5" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Yogyakarta</h5>
                         +                               <p class="ms-5">JL. Gajah Mada No.21-23, kel.Pakulaman, Kec.Porwokinanti, Yogyakarta, 55112,</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Bali -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Bali</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address6')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address6" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Denpasar</h5>
                                                        <p class="ms-5">Pertokoan Sudirman Agung Blok C No.19, Dauh Puri Klod, Kec. Denpasar Bar, Kota Denpasar, Bali 80113</p>
                                                        <p class="ms-5">Telp : (0361) 255363</p>
                                                        <h5 class="fw-bolder">Tabanan</h5>
                                                        <p class="ms-5">Pertokoan Sudirman Agung Blok C No.19, Dauh Puri Klod, Kec. Denpasar Bar, Kota Denpasar, Bali 80113</p>
                                                        <p class="ms-5">Telp : (0361) 255363</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End -->

                                                <!-- NTT -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Nusa Tenggara Barat</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address99')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address99" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Lombok</h5>
                                                        <p class="ms-5">Jl. Brawijaya, Kec.Mataram, kel.Cakranegara, Prov. Nusa Tenggara Barat, Kode pos 83233,</p>
                                                        <p class="ms-5">Telp : (0370) 574525</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Jambi -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Jambi</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address7')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address7" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Jambi</h5>
                                                        <p class="ms-5">JL. Sunan Giri No.99, Kec.Kota Baru, kel.Simpang Tiga Sipin, Jambi, 36126,</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Sumsel -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sumatra Selatan</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address8')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address8" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Palembang</h5>
                                                        <p class="ms-5">JL.Dr Moh Hatta rt 18/rw 05 No.1067 A, Kelurahan Kemalaraja Kecamatan Baturaja Timur kabupaten Ogan Komring Ulu Provinsi Sumatra Selatan 32111
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End -->

                                                <!-- Sumbar -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sumatra Barat</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address9')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address9" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Padang</h5>
                                                        <p class="ms-5">JL KIS Mangunsarkoro No 3C, Kec. Padang Timur, Kel Jati BaruPhone 0811 661 458</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Bengkulu -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Bengkulu</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address10')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address10" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Bengkulu</h5>
                                                        <p class="ms-5">JL. Flamboyan Raya No:39 RT:16 RW:05</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Bangka Belitung -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Bangka Belitung</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address11')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address11" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Pangkal Pinang</h5>
                                                        <p class="ms-5">Jl. Soekarno Hatta No.18 RT 009/RW 003 Kec.Goromaya, Kel.Bukit Besar, Bangka Belitung</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End -->


                                                <!-- Riau -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Riau</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address12')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address12" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Pekanbaru</h5>
                                                        <p class="ms-5">Jl. Sm Amin Komp Royal Platinum No 89 HH, Kec.Tampan, Kel.Simpang Baru</p>
                                                    </div>
                                                </div>
                                                <!-- end -->

                                                <!-- Gorontalo -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Gorontalo</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address13')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address13" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Gorontalo</h5>
                                                        <p class="ms-5">Ruko Bonza No.3 Jl. Nani Wartabone (ex, Jalan Panjaitan) Kec.Kota Selatan, Kel.Limba U1, 96135</p>
                                                    </div>
                                                </div>
                                                <!-- end -->

                                                <!-- Lampung -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Lampung</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address14')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address14" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Bandar Lampung</h5>
                                                        <p class="ms-5">Jl. Teuku Umar No.36, kec.Kedaton Kel.Surabaya, 35141</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- end -->

                                                <!-- Sulawesi Selatan -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sulawesi Selatan</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address15')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address15" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Makasar</h5>
                                                        <p class="ms-5">Jl. Adhyaksa Lama No.20 Kel.Panakukang, Kel.Masale</p>
                                                        <h5 class="fw-bolder">Pare Pare</h5>
                                                        <p class="ms-5">Jl. Agussalim No 172 B, Kel.Ujung Kec.Labukkang, 91111</p>
                                                        <h5 class="fw-bolder">Palopo</h5>
                                                        <p class="ms-5">Jl. Jend. Sudirman (Poros Binturu) Kel. Binturu, Kec. Wara Selatan. Kota Palopo - Sulawesi Selatan 91926</p>
                                                    </div>
                                                </div>
                                                <!-- end-->

                                                <!-- Sulawesi Utara -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sulawesi Utara</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address16')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address16" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Manado</h5>
                                                        <p class="ms-5">Jl.Yos Sudarso Paal 2 (Kompleks Pasar Segar) Kec.Paal Dua, Kel.Paal Dua</p>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                                <!-- Sulawesi Tengah -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sulawesi Tengah</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address17')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address17" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Palu</h5>
                                                        <p class="ms-5">Jl. Dewi Sartika No 80 Kec.Palu Selatan, Kel.Petobo, 94231</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- end -->

                                                <!-- Kalimantan Barat -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Kalimantan Barat</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address18')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address18" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Pontianak</h5>
                                                        <p class="ms-5">Jl Dr. Wahidin Sudirohusodo No.26 C, RT.003/RW.002 Kec.Pontianak Kota Kel.Sungai, 78116</p>
                                                    </div>
                                                </div>
                                                <!-- end -->

                                                <!-- Kalimantan Tengah -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Kalimantan Tengah</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address19')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address19" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Palangkaraya</h5>
                                                        <p class="ms-5">JL.Temanggung Tilung komplek Pertokoan No.111 RT.002 RW.008 kec.Jekan Raya Kel.Menteng, 73111</p>
                                                    </div>
                                                </div>
                                                <!-- end -->

                                                <!-- Kalimantan Timur -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Kalimantan Timur</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <p class="mb-0 me-2">Alamat Cabang</p>
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address20')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address20" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Balikpapan</h5>
                                                        <p class="ms-5">Ruko Balikpapan Baru (belakang mall Fantasi) Blok. FJ.1 No.07, Kec.Balikpapan Selatan Kel.Damai, 76114</p>
                                                        <h5 class="fw-bolder">Samarinda</h5>
                                                        <p class="ms-5">Jl. Bukit Alaya, Ruko Alaya Junction LC-07 Kec.Sungai Pinang Kel.Sungai Pinang Dalam, 75117</p>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                            </div>
                                        </div>

                                        <script>
                                            function toggleAddress(addressId) {
                                                const addressElement = document.getElementById(addressId);
                                                if (addressElement.style.display === "none") {
                                                    addressElement.style.display = "block";
                                                } else {
                                                    addressElement.style.display = "none";
                                                }
                                            }

                                            let currentOpen = null; // Variabel untuk melacak elemen yang sedang terbuka

                                            function toggleAddress(id) {
                                                const addressElement = document.getElementById(id);

                                                if (currentOpen && currentOpen !== addressElement) {
                                                    // Tutup elemen yang sedang terbuka jika berbeda
                                                    currentOpen.style.display = "none";
                                                }

                                                if (addressElement.style.display === "none") {
                                                    // Buka elemen jika sedang tertutup
                                                    addressElement.style.display = "block";
                                                    currentOpen = addressElement; // Update elemen yang sedang terbuka
                                                } else {
                                                    // Tutup elemen jika sedang terbuka
                                                    addressElement.style.display = "none";
                                                    currentOpen = null; // Reset elemen yang terbuka
                                                }
                                            }
                                        </script>


                                        <style>
                                            .address {
                                                margin-top: 10px;
                                                padding: 10px;
                                                border: 1px solid #ddd;
                                                border-radius: 5px;
                                                background-color: #f9f9f9;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WA -->

<div class="bootsidemenu-container bootsidemenu-right" id="sideMenu">
    <!-- Tombol Toggle (bulat) -->
    <button id="toggleMenu" class="toggle-menu">❯❯</button>

    <!-- Item Menu -->
    <a href="https://api.whatsapp.com/send/?phone=6287736879970&text=Hallo++Gratama+Finance+Indonesia&type=phone_number&app_absent=0" target="_blank" id="whatsapp-button" class="bootsidemenu-item">
        <img src="assets/img/wa.png" alt="WhatsApp" class="whatsapp-icon">
    </a>
    <!-- <a href="#" class="bootsidemenu-item">
        <i class="fab fa-instagram fa-2x"></i>
    </a> -->
</div>

  <!-- footer -->
<footer class="mt-5">
  <div class="footer-top bg-dark text-white p-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <h4 class="fw-bold">{{$contact->name}}</h4>
          <p>{{$contact->description}}</p>
          <p><strong>Telp :</strong> {{$contact->telepon}}</p>
          <p><strong>Email:</strong> {{$contact->email}}</p>
        </div>
        <!-- <div class="col-md-2">
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
        </div> -->
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
        <div class="col-md-3 d-flex flex-column align-items-center">
          <div class="logo-top mb-3">
            <img src="assets/img/logoG2.png" alt="Logo G2" class="img-fluid logo-bordered" style="max-width: 100%;">
          </div>
          <div class="logo-bottom d-flex justify-content-between w-100">
            <img src="assets/img/laps-logo.png" alt="Logo LAPS" class="img-fluid logo-bordered" style="max-width: 48%;">
            <img src="assets/img/logo-appi.png" alt="Logo APPI" class="img-fluid logo-bordered" style="max-width: 48%;">
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
          <div>&copy; 2024 <strong>PT. Gratama Finance Indonesia</strong>. All Rights Reserved.</div>
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
  <style>
.footer-top {
    background-image: url('assets/img/194.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 20px 40px;
    position: relative;
    z-index: 1; /* Memastikan konten di atas overlay */
}

/* Overlay transparan */
.footer-top::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.85); /* Transparansi 60% */
    z-index: -1; /* Memastikan overlay di bawah konten */
}


.footer-top .container-fluid {
    max-width: 1200px;
    margin: 0 auto; /* Memusatkan kontainer */
}

.footer-top h4, 
.footer-top p {
    margin-bottom: 15px;
    text-align: left; /* Rata kiri */
}

ul.list-group {
    padding-left: 0;
    list-style: none;
    margin: 0;
}

ul.list-group .list-item {
    margin-bottom: 10px;
}

ul.list-group .list-item a {
    color: white;
    text-decoration: none;
}

.logo-top img, 
.logo-bottom img {
    max-width: 100%;
    margin-bottom: 10px;
}

.logo-bottom {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    width: 100%;
}

@media (max-width: 768px) {
    .footer-top .col-md-3, 
    .footer-top .col-md-2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .logo-bottom {
        flex-direction: column;
        align-items: center;
    }
}

</style>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootsidemenu@1.0.2/dist/bootsidemenu.min.js"></script>

<script>
    $(document).ready(function() {
        // Menu awalnya tertutup
        let isMenuOpen = false;

        // Toggle menu ketika tombol di-klik
        $('#toggleMenu').click(function() {
            if (isMenuOpen) {
                // Tutup menu
                $('#sideMenu').removeClass('menu-open');
                isMenuOpen = false;
            } else {
                // Buka menu
                $('#sideMenu').addClass('menu-open');
                isMenuOpen = true;
            }
        });

        // Menutup menu jika klik di luar menu
        $(document).click(function(event) {
            // Jika menu terbuka dan klik di luar menu atau tombol
            if (isMenuOpen && !$(event.target).closest('#sideMenu, #toggleMenu').length) {
                $('#sideMenu').removeClass('menu-open');
                isMenuOpen = false;
            }
        });
    });
</script>

<script>
  $(document).ready(function() {
    // Saat mengarahkan kursor ke menu dropdown
    $('.nav-item.dropdown').hover(
        function() {
            // Slide down pada dropdown-menu
            $(this).find('.dropdown-menu').stop(true, true).slideDown(200);
        },
        function() {
            // Slide up pada dropdown-menu
            $(this).find('.dropdown-menu').stop(true, true).slideUp(200);
        }
    );
});
</script>

    <script>
        // Blokir klik kanan di semua gambar
        document.addEventListener('contextmenu', function (e) {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
            }
        });
    </script>
 
</body>
</head>
</html>