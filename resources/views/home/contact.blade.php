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
            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

        <!-- Hubungi Kami Dropdown -->
        <li class="nav-item dropdown mx-3">
          <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('contact')) active @endif" href="#"
            id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hubungi Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="contactDropdown">
            <li><a class="dropdown-item" href="contact">Kontak</a></li>
            <li><a class="dropdown-item" href="http://localhost/pengaduan/contact.html" target="_blank">Pengaduan</a></li>
            <!-- <li><a class="dropdown-item" href="lokasi">Lokasi Kantor</a></li> -->
          </ul>
        </li>

        <!-- Pengaduan Dropdown -->
        <!-- <li class="nav-item dropdown mx-3">
          <a class="nav-link fw-bolder dropdown-toggle @if(Request::is('pengaduan')) active @endif" href="#"
            id="pengaduanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pengaduan
          </a>
          <ul class="dropdown-menu" aria-labelledby="pengaduanDropdown">
            <li><a class="dropdown-item" href="pengaduan">Form Pengaduan</a></li>
            <li><a class="dropdown-item" href="faq">FAQ Pengaduan</a></li>
            <li><a class="dropdown-item" href="status-pengaduan">Cek Status</a></li>
          </ul>
        </li> -->
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
                                            name: "Jl. Jend. Sudirman Kav.59, Senayan Kec. Kebayoran Baru, Jakarta Selatan."
                                        },
                                        {
                                            lat: -7.4615315,
                                            lon: 112.7143673,
                                            name: "Ruko Darmo Park 1 Blok 1B No. 7 Kel. Dukuh Pakis, Kec. Sawahan, Kota Surabaya, Jawa Timur. 60224"
                                        },
                                        {
                                            lat: -6.9413703,
                                            lon: 107.6563096,
                                            name: "Ruko Metro Trade Center Blok D No. 19 Jl. Soekarno Hatta No. 590, Buah Batu, Suka Jadei, Jawa Barat, 40286."
                                        },
                                        {
                                            lat: -5.1601724,
                                            lon: 119.4464177,
                                            name: "Jl. Adhyaksa Lama No.20 Kel.Panakukang, Kel.Masale"
                                        },
                                        {
                                            lat: -6.2473894,
                                            lon: 106.9688129,
                                            name: "JL. KH Noer Ali Blok A2 No 1-2 Ruko Duta Permai, kel.Bekasi Barat, kec.Jakasampurna, Bekasi, 17145"
                                        },
                                        {
                                            lat: -6.5997054,
                                            lon: 106.8176691,
                                            name: "JL.Kol. Ahmad Syam Rt.04/Rw.06 Kp.Sawah, kel.Tanah Baru, kec.Bogor Utara, Bogor, 16154"
                                        },
                                        {
                                            lat: -6.2956631,
                                            lon: 107.150167,
                                            name: "Kawasan Industri Jababeka Tahap II Ruko Metro Boulevard Blok A-22, kel. Pasirkali, kec. Cikarang Selatan, Bekasi, Jawa Barat, 17530"
                                        },
                                        {
                                            lat: -6.711259,
                                            lon: 108.5453417,
                                            name: "JL. Tuparev Ruko Cirebon Bisnis Center Blok B.4 Ds.Kertawinangun, kec.Kedaung kab.Cirebon, Jawa Barat, 45153"
                                        },
                                        {
                                            lat: -6.403747,
                                            lon: 106.8361516,
                                            name: "Ruko Sukmajaya Jl.Tole Iskandar No.34 Kav.11, kel. Sukmajaya, Depok, Jawa Barat, 16412"
                                        },
                                        {
                                            lat: -6.2439008,
                                            lon: 106.5218335,
                                            name: "Jl.Citra Raya Utama Timur, Ruko Mardi Grass Blok KC.02 No.02, Cikupa, Banten, kota Tangerang, 15710"
                                        },
                                        {
                                            lat: -6.1997662,
                                            lon: 106.6180957,
                                            name: "Kantor KSKC TangerangJl.Raya Imam Bonjol, Ruko Victoria Park Blok A2 No.50, kel.Bojong Jaya, Kec.karawaci, Tangerang, Banten, 15116"
                                        },
                                        {
                                            lat: -6.9884874,
                                            lon: 110.4289889,
                                            name: "Jl.MT. Haryono 517 J (Stadion Utara), kel.Karangkidul, kec.Semarang Tengah, Semarang, 50241"
                                        },
                                        {
                                            lat: -7.4161099,
                                            lon: 109.2348229,
                                            name: "JL.Ruko Karang Kobar Simpang Dr.Angka RT.01 RW.08, kel.sokanegara, kec.Purwokerto Timur, Purwokerto, Jawa Tengah, 53115"
                                        },
                                        {
                                            lat: -7.559166,
                                            lon: 110.7982125,
                                            name: "Jl. Rajawali I Ruko Blok B10 Pasar Raya, kel.Gentan, kecBaki, Surakarta Solo, 57194"
                                        },
                                        {
                                            lat: -6.8803901,
                                            lon: 109.1336577,
                                            name: "Ruko Sultan Square N0.11, JL. Sultan Agung, Tegal Timur, Slerok, 52125"
                                        },
                                        {
                                            lat: -8.2281349,
                                            lon: 114.3583992,
                                            name: "Jl. Agus Salim No 07, Tamanbaru, Banyuwangi, Jawa Timur, 68417"
                                        },
                                        {
                                            lat: -8.174053,
                                            lon: 113.6354294,
                                            name: "Jl.Gatot Subroto No.40, kel.kepatihan, kec.kaliwates, Jember, Jawa Timur, 68131,"
                                        },
                                        {
                                            lat: -7.8133869,
                                            lon: 112.0052636,
                                            name: "Ruko Brawijaya 44 No.24 JL.Brawijaya, kel.Pocanan, kec.Kota Kediri, Kediri, Jawa Timur 23372"
                                        },
                                    
                                        {
                                            lat: -7.9648235,
                                            lon: 112.6316488,
                                            name: "Jl.W.R Supratman C2 KAV.1 RT.01 RW.02, Kel.Rampal Claket, Kec. Klojen, Malang, Jawa Timur, 65111,"
                                        },
                                        {
                                            lat: -7.514872,
                                            lon: 112.4306125,
                                            name: "Jl.Jayanegara No.199 A, Kel.Banjaragung, Kec.Puri, Kab.MOJOKERTO, Jawa Timur, 61363"
                                        },
                                        {
                                            lat: -7.4611454,
                                            lon: 112.7134872,
                                            name: "JL.KH.Mukmin Ruko Citra Indah Blok RE-18, kel.Sidokare, kec.Sidoarjo, Jawa timur, 61214"
                                        },
                                        {
                                            lat: -7.2838352,
                                            lon: 112.7777819,
                                            name: "Ruko Darmo Park 1 Blok 1B No. 7 Kel. Dukuh Pakis, Kec. Sawahan, Kota Surabaya, Jawa Timur. 60224"
                                        },
                                        {
                                            lat: -7.2838352,
                                            lon: 112.7777819,
                                            name: "Ruko Mega Galaxy Jl. Ir. Soekarno Blok 16 C No. 20 Kel. Klampis Ngasem, Kec. Sukolilo, Kota Surabaya, Jawa Timur. 60116"
                                        },
                                        {
                                            lat: -7.7990271,
                                            lon: 110.3705421,
                                            name: "JL. Gajah Mada No.21-23, kel.Pakulaman, Kec.Porwokinanti, Yogyakarta, 55112"
                                        },
                                        {
                                            lat: -8.6759889,
                                            lon: 115.2158387,
                                            name: "Pertokoan Sudirman Agung Blok C No.19, Dauh Puri Klod, Kec. Denpasar Bar, Kota Denpasar, Bali 80113"
                                        },
                                        {
                                            lat: -1.6248007,
                                            lon: 103.5944267,
                                            name: "JL. Sunan Giri No.99, Kec.Kota Baru, kel.Simpang Tiga Sipin, Jambi, 36126"
                                        },
                                        {
                                            lat: -4.1164921,
                                            lon: 104.1772898,
                                            name: "Jl. Dr. Moh Hatta No. 1067 A, RT. 18/05 Kel. Kemalaraja, Kec. Baturaja, Kab. Ogan Komring Ulu, Sumatera Selatan. 3211"
                                        },
                                        {
                                            lat: -0.9342018,
                                            lon: 100.3631127,
                                            name: "Jl. Kis Mangunsarkoro No. 3C Kel. Jati Baru, Kec. Padang Timur, Kota Padang, Sumatera Barat. 25129"
                                        },
                                        {
                                            lat: -3.8253459,
                                            lon: 102.241064,
                                            name: "JL. Flamboyan Raya No39 RT16 RW05"
                                        },
                                        {
                                            lat: -2.1925779,
                                            lon: 106.1019844,
                                            name: "Jl. Soekarno Hatta No. 18, RT. 09/03 Kel. Bukit Besar, Kec. Girimaya, Kota Pangkalpinang, Bangka Belitung. 33146"
                                        },
                                        {
                                            lat: 0.4790406,
                                            lon: 101.3918459,
                                            name: "Jl. Sm Amin Komp Royal Platinum No 89 HH, Kec.Tampan, Kel.Simpang Baru"
                                        },
                                        {
                                            lat: -5.3889962,
                                            lon: 105.2371069,
                                            name: "Jl. Teuku Umar No.36, kec.Kedaton Kel.Surabaya, 35141"
                                        },
                                        {
                                            lat: -4.0177466,
                                            lon: 119.6216909,
                                            name: "Jl. Agussalim No 172 B, Kel.Ujung Kec.Labukkang, 91111"
                                        },
                                        {
                                            lat: -3.0172416,
                                            lon: 120.2054064,
                                            name: "Jl. Jend. Sudirman (Poros Binturu) Kel. Binturu, Kec. Wara Selatan. Kota Palopo - Sulawesi Selatan 91926"
                                        },
                                        {
                                            lat: 1.4909234,
                                            lon: 124.8602914,
                                            name: "Pasar Segar Ruko RB No. 26Jl. Yos Sudarso Kel. Paal Dua, Kec. Tikala, Kota Manado, Sulawesi Selatan. 95129"
                                        },
                                        {
                                            lat: -0.935529,
                                            lon: 119.8966807,
                                            name: "Jl. Dewi Sartika No 80 Kec.Palu Selatan, Kel.Petobo, 94231"
                                        },
                                        {
                                            lat: -0.0616129,
                                            lon: 109.2703619,
                                            name: "Jl Dr. Wahidin Sudirohusodo No.26 C, RT.003/RW.002 Kec.Pontianak Kota Kel.Sungai, 78116"
                                        },
                                        {
                                            lat: -2.2136349439404963,
                                            lon: 113.90589926494951,
                                            name: "JL.Temanggung Tilung komplek Pertokoan No.111 RT.002 RW.008 kec.Jekan Raya Kel.Menteng, 73111"
                                        },
                                        {
                                            lat: -1.2591706,
                                            lon: 116.8576581,
                                            name: "Ruko Balikpapan Baru (belakang mall Fantasi) Blok. FJ.1 No.07, Kec.Balikpapan Selatan Kel.Damai, 76114"
                                        },
                                        {
                                            lat: -0.4662538,
                                            lon: 117.1717114,
                                            name: "Jl. Bukit Alaya, Ruko Alaya Junction LC-07 Kec.Sungai Pinang Kel.Sungai Pinang Dalam, 75117"
                                        },
                                         {
                                            lat: 3.5688595,
                                            lon: 98.6254542,
                                            name: "Jl. Gagak Hitam No. C 90 Kel. Seisikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara. 20122"
                                        },
                                         {
                                            lat: -1.4905928,
                                            lon: 102.0973268,
                                            name: "Jl. Lintas Sumatera KM. 3 No. 139 Kel. Sungai Kerjan, Kec. Bungo Dani, Kab. Bungo, Jambi. 37212"
                                        },
                                         {
                                            lat: -0.9372955,
                                            lon: 100.3590278,
                                            name: "Jl. Kis Mangunsarkoro No. 3C Kel. Jati Baru, Kec. Padang Timur, Kota Padang, Sumatera Barat. 25129"
                                        },
                                         {
                                            lat: -2.9221293,
                                            lon: 104.7128346,
                                            name: "JL.Dr Moh Hatta rt 18/rw 05 No.1067 A, Kelurahan Kemalaraja Kecamatan Baturaja Timur kabupaten Ogan Komring Ulu Provinsi Sumatra Selatan 32111"
                                        },
                                         {
                                            lat: -2.6735223,
                                            lon: 111.6463959,
                                            name: "Jl. Matnoor Kel. Baru, Kec. Arut Selatan, Kab. Kotawaringin Barat, Kalimantan Tengah. 74113"
                                        },
                                        {
                                            lat: -6.9051281,
                                            lon: 109.6976398,
                                            name: "Jl. Dr. Sutomo Blok B2 No. 6 Kel. Baros, Kec. Pekalongan Timur, Kota Pekalongan, Jawa Tengah. 51129"
                                        },
                                        {
                                            lat: 2.9569023,
                                            lon: 99.0329939,
                                            name: "Jl. Handayani No. 4 Kel. Bah Kapul, Kec. Siantar Silatasari, Kota Pemantang Siantar, Sumatera Utara. 21139"
                                        },
                                        {
                                            lat: -7.760206,
                                            lon: 113.2289318,
                                            name: "Ruko Wiroborang Jl. Panglima Sudirman No. 420 Kel. Wiroborang, Kec. Mayangan, Kota Probolinggo, Jawa Timur. 62716"
                                        },
                                        {
                                            lat: -6.5246769,
                                            lon: 107.4397491,
                                            name: "Jl. Veteran No. 222 Kel. Ciseureuh, Kec. Purwakarta, Kab. Purwakarta, Jawa Barat. 41181"
                                        },
                                        {
                                            lat: 2.0781123,
                                            lon: 99.8513182,
                                            name: "Jl. SM. Raja Komplek M88 No. 9H Kel. Bakaran Batu, Kec. Rantau Selatan, Kab. Labuhanbatu, Sumatera Utara. 21421"
                                        },
                                        {
                                            lat: -7.3070239,
                                            lon: 110.4782731,
                                            name: "Jl. Fatmawati No. 48 Kel. Blotongan, Kec. Sidorejo, Kota Salatiga, Jawa Tengah. 50715"
                                        },
                                        {
                                            lat: -2.3188721,
                                            lon: 112.0816907,
                                            name: "Jl. Yos Sudarso No. 36, RT. 13/5 Kel. Mentawa Baru Hulu, Kec. Mentawa Baru Ketapang, Kab. Kotawaringin Timur, Kalimantan Tengah. 74322"
                                        },
                                        {
                                            lat: -6.1257164,
                                            lon: 106.1465765,
                                            name: "Jl.MT. Haryono 517 J (Stadion Utara), kel.Karangkidul, kec.Semarang Tengah, Semarang, 50241"
                                        },
                                        {
                                            lat: -7.4279489,
                                            lon: 110.9937752,
                                            name: "Jl. Raya Sukowati No. 28 E Kel. Sine, Kec. Sragen, Kab. Sragen, Jawa Tengah. 57213"
                                        },
                                        {
                                            lat: -6.9454079,
                                            lon: 106.9158968,
                                            name: "Jl. Pelabuhan II No. 421, RT. 01/01 Kel. Sindangsari, Kec. Lembur Situ, Kota Sukabumi, Jawa Barat.43167"
                                        },
                                        {
                                            lat: -8.5410086,
                                            lon: 115.1098637,
                                            name: "Pertokoan Sudirman Agung Blok C No.19, Dauh Puri Klod, Kec. Denpasar Bar, Kota Denpasar, Bali 80113"
                                        },
                                        {
                                            lat: -7.3440443,
                                            lon: 108.2160899,
                                            name: "Jl. Permata Raya No. 57 Kel. Kahuripan, Kec. Tawang,Kota Tasikmalaya, Jawa Barat.46112"
                                        },
                                        {
                                            lat: -8.0559367,
                                            lon: 111.9141749,
                                            name: "Jl. MT Haryono No. 9 el. Wadu Jaya, Kec. Kedungwaru Kab. Tulungagung, Jawa Timur. 66229"
                                        },
                                        {
                                            lat: -10.1730604,
                                            lon: 123.6104926,
                                            name: "Jl. W.J. Lalamentik, RT. 23/06 Kel. Oebobo, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur. 85111"
                                        },
                                        {
                                            lat: -3.2791876,
                                            lon: 102.920049,
                                            name: "Jl. Sultan Mahmud Baddarudin Kel. Tanah Periuk, Kec. Lubuklinggau Selatan II, Kota Lubuklinggau, Sumatera Selatan. 31611"
                                        },
                                        {
                                            lat: -8.5959193,
                                            lon: 116.1263882,
                                            name: "Jl. Brawijaya, Kec.Mataram, kel.Cakranegara, Prov. Nusa Tenggara Barat, Kode pos 83233"
                                        },
                                        {
                                            lat: -6.7987325,
                                            lon: 110.7868881,
                                            name: "Jl. Kudus-Jepara No. 255 Kel. Prambatan Lor, Kec. Kaliwungu Kab. Kudus, Jawa Tengah 59332"
                                        },
                                        {
                                            lat: -7.6303051,
                                            lon: 109.2468724,
                                            name: "Jl. Jend. A. Yani No. 3F Kel. Bajing, Kec. Kroya, Kab. Cilacap, Jawa Tengah. 53282"
                                        },
                                        {
                                            lat: -7.5886868,
                                            lon: 112.1061136,
                                            name: "Jl. Supriadi No. 37-C Kel. Kudu, Kec. Kertosono Kab. Nganjuk, Jawa Timur"
                                        },
                                        {
                                            lat: -3.9955041,
                                            lon: 122.5028555,
                                            name: "Jl. Sorumba No. 53 Kel. Wowanggu, Kec. Kadia, Kota Kendari, Sulawesi Tenggara. 93118"
                                        },
                                        {
                                            lat: -6.3215284,
                                            lon: 107.2880457,
                                            name: "Kantor KSKC Ruko Mediterania Blok I No. 27 Jl. Galuh MasKel. Sukaharja, Kec. Telukjambe Timur,Kab. Karawang, Jawa Barat.41336"
                                        },
                                        {
                                            lat: -7.1656918,
                                            lon: 112.5970309,
                                            name: "Ruko Green Garden Blok A5/17 Jl. Dr. Wahidin Sudirohusodo Kel. Dahanrejo, Kec. Kobonmas, Kab. Gresik, Jawa Timur. 61124"
                                        },
                                        {
                                            lat: 0.5419484,
                                            lon: 123.0496743,
                                            name: "Ruko Bonza No.3 Jl. Nani Wartabone (ex, Jalan Panjaitan) Kec.Kota Selatan, Kel.Limba U1, 96135"
                                        },
                                        {
                                            lat: -8.5412596,
                                            lon: 115.3125758,
                                            name: "Jl. Bypass Dharma Giri No 789 Kel. Bitera, Kec. Gianyar, Kab. Gianyar, Bali. 80511"
                                        },
                                        {
                                            lat: -7.1984711,
                                            lon: 107.9118756,
                                            name: "Jl. Jenderal Sudirman Copong, Kel. Sukamentri, Kec. Garut Kota,Kab. Garut, Jawa Barat.44114"
                                        },
                                        {
                                            lat: 1.2802566,
                                            lon: 101.1681313,
                                            name: "Jl. Hangtuah No. 7 Kel. Duri Barat, Kec. Mandau Kab. Bengkalis, Riau. 2888"
                                        },
                                        {
                                            lat: -6.7112643,
                                            lon: 108.5453417,
                                            name: "JL. Tuparev Ruko Cirebon Bisnis Center Blok B.4 Ds.Kertawinangun, kec.Kedaung kab.Cirebon, Jawa Barat, 45153"
                                        },
                                        {
                                            lat: -6.8920762,
                                            lon: 107.5368102,
                                            name: "Jl. Sentra Raya No. 3 Kel. Baros, Kec. Cimahi Tengah,Kota Cimahi, Jawa Barat. 40521"
                                        },
                                        {
                                            lat: -6.365936,
                                            lon: 106.9395079,
                                            name: "Jl. Kota Wisata Kel. Ciangsana, Kec. Gunung Putri, Kab Bogor, Jawa Barat. 16968"
                                        },
                                        {
                                            lat: -0.2901695,
                                            lon: 100.3641552,
                                            name: "Jl. Veteran No. 213 A Kel. Kubu Gulai Bancah, Kec. Mandiangin Koto Selayan, Kota Bukittinggi, Sumatera Barat. 26122"
                                        },
                                        {
                                            lat: -4.5441601,
                                            lon: 120.3185319,
                                            name: "Jl. Sukawati Barat No. 17 K Kel. Macege, Kec. Tanete Riattang Barat, Kab. Bone, Sulawesi Selatan. 92732"
                                        },
                                        {
                                            lat: -7.1694843,
                                            lon: 111.8925441,
                                            name: "Ruko Central U No. 11 Jl. Veteran Central 5-9 Kel. Jambean, Kec. Bojonegoro, Kab. Bojonegoro, Jawa Timur. 62115"
                                        },
                                        {
                                            lat: -6.9671772,
                                            lon: 111.4082196,
                                            name: "Jl. Agil Kusumadya RT. 03/01 Kel. Kauman, Kec. Blora, Kota Blora, Jawa Tengah. 58212"
                                        },
                                        {
                                            lat: 3.6320682,
                                            lon: 98.4813604,
                                            name: "Jl. Teuku Amir Hamzah No. 382 Kel. Jati Karya, Kec. Binjai Utara, Kota Binjai, Sumatera Utara. 20374"
                                        },
                                        {
                                            lat: 1.1157838,
                                            lon: 104.0582251,
                                            name: "Grand Niaga Mas Blok B No. 62 Kel. Belian, Kec. Batam Kota, Kota Batam, Kep Riau. 29464"
                                        },
                                        {
                                            lat: -3.3720376,
                                            lon: 114.6226648,
                                            name: "Jl. A. Yani KM. 8,8 Kel. Kertak Hanyar, Kec. Kertak Hanyar, Kota Banjarmasin, Kalimantan Selatan. 70654"
                                        },
                                        {
                                            lat: -2.1431942,
                                            lon: 114.6226648,
                                            name: "Jl. Soekarno Hatta No. 18, RT. 09/03 Kel. Bukit Besar, Kec. Girimaya, Kota Pangkalpinang, Bangka Belitung. 33146"
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
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address1')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address1" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Bandung</h5>
                                                        <p class="ms-5">Ruko Metro Trade Center Blok D No. 19 Jl. Soekarno Hatta No. 590, Buah Batu, Suka Jadei, Jawa Barat, 40286</p>
                                                        <h5 class="fw-bolder">Bekasi</h5>
                                                        <p class="ms-5">JL. KH Noer Ali Blok A2 No 1-2 Ruko Duta Permai, kel.Bekasi Barat, kec.Jakasampurna, Bekasi, 17145</p>
                                                        <h5 class="fw-bolder">Bogor</h5>
                                                        <p class="ms-5">JL.Kol. Ahmad Syam Rt.04/Rw.06 Kp.Sawah, kel.Tanah Baru, kec.Bogor Utara, Bogor, 16154</p>
                                                        <h5 class="fw-bolder">Cikarang Selatan</h5>
                                                        <p class="ms-5">Kawasan Industri Jababeka Tahap II Ruko Metro Boulevard Blok A-22, kel. Pasirkali, kec. Cikarang Selatan, Bekasi, Jawa Barat, 17530</p>
                                                        <h5 class="fw-bolder">Cirebon</h5>
                                                        <p class="ms-5">JL. Tuparev Ruko Cirebon Bisnis Center Blok B.4 Ds.Kertawinangun, kec.Kedaung kab.Cirebon, Jawa Barat, 45153</p>
                                                        <h5 class="fw-bolder">Depok</h5>
                                                        <p class="ms-5">Ruko Sukmajaya Jl.Tole Iskandar No.34 Kav.11, kel. Sukmajaya, Depok, Jawa Barat, 16412</p>
                                                        <h5 class="fw-bolder">Garut</h5>
                                                        <p class="ms-5">Jl. Jenderal Sudirman Copong, Kel. Sukamentri, Kec. Garut Kota,Kab. Garut, Jawa Barat.44114</p>
                                                        <h5 class="fw-bolder">Karawang</h5>
                                                        <p class="ms-5">Ruko Mediterania Blok I No. 27 Jl. Galuh MasKel. Sukaharja, Kec. Telukjambe Timur,Kab. Karawang, Jawa Barat.41336</p>
                                                        <h5 class="fw-bolder">Majalengka</h5>
                                                        <p class="ms-5">Ruko Taman Hana Sakura No.3 Jl. CicenangKel. Ciceang, Kec. Cigasong,Kab. Majalengka, Jawa Barat.45476</p>
                                                        <h5 class="fw-bolder">Purwakarta</h5>
                                                        <p class="ms-5">Jl. Veteran No. 222 Kel. Ciseureuh, Kec. Purwakarta, Kab. Purwakarta, Jawa Barat. 41181</p>
                                                        <h5 class="fw-bolder">Sukabumi</h5>
                                                        <p class="ms-5">Jl. Pelabuhan II No. 421, RT. 01/01 Kel. Sindangsari, Kec. Lembur Situ, Kota Sukabumi, Jawa Barat.43167</p>
                                                        <h5 class="fw-bolder">Tasikmalaya</h5>
                                                        <p class="ms-5">Jl. Permata Raya No. 57 Kel. Kahuripan, Kec. Tawang,Kota Tasikmalaya, Jawa Barat.46112</p>
                                                        <h5 class="fw-bolder">Bekasi Barat</h5>
                                                        <p class="ms-5">Ruko Duta Permai Blok A1 A2 Jl. Kh. Noer Ali, RT 005/006A,Kel. Jakasampurna, Kec. Bekasi Barat, Kota Bekasi, Jawa Barat.17145</p>
                                                        <h5 class="fw-bolder">Cimahi</h5>
                                                        <p class="ms-5">Jl. Sentra Raya No. 3 Kel. Baros, Kec. Cimahi Tengah,Kota Cimahi, Jawa Barat.40521</p>
                                                    </div>
                                                </div>

                                                <!-- Banten -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Banten</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
                                                        <h5 class="fw-bolder">Blora</h5>
                                                        <p class="ms-5">Jl. Agil Kusumadya RT. 03/01 Kel. Kauman, Kec. Blora, Kota Blora, Jawa Tengah. 58212</p>
                                                        <h5 class="fw-bolder">Cilacap</h5>
                                                        <p class="ms-5">Jl. Jend. A. Yani No. 3F Kel. Bajing, Kec. Kroya, Kab. Cilacap, Jawa Tengah. 53282</p>
                                                        <h5 class="fw-bolder">Kudus</h5>
                                                        <p class="ms-5">Jl. Kudus-Jepara No. 255 Kel. Prambatan Lor, Kec. Kaliwungu Kab. Kudus, Jawa Tengah. 59332</p>
                                                        <h5 class="fw-bolder">Pekalongan</h5>
                                                        <p class="ms-5">Ruko Dupan Square Jl. Dr. Sutomo Blok B2 No. 6 Kel. Baros, Kec. Pekalongan Timur, Kota Pekalongan, Jawa Tengah. 51129</p>
                                                        <h5 class="fw-bolder">Salatiga</h5>
                                                        <p class="ms-5">Ruko Wijaya Square IV Jl. Fatmawati No. 48 Kel. Blotongan, Kec. Sidorejo, Kota Salatiga, Jawa Tengah. 50715</p>
                                                        <h5 class="fw-bolder">Sragen</h5>
                                                        <p class="ms-5">Jl. Raya Sukowati No. 28 E Kel. Sine, Kec. Sragen, Kab. Sragen, Jawa Tengah. 57213</p>
                                                    </div>
                                                </div>
                                                <hr>

                                                <!-- Jawa Timur -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Jawa Timur</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
                                                        <h5 class="fw-bolder">Surabaya</h5>
                                                        <p class="ms-5">Ruko Darmo Park 1 Blok 1B No. 7 Kel. Dukuh Pakis, Kec. Sawahan, Kota Surabaya, Jawa Timur. 60224</p>
                                                        <h5 class="fw-bolder">Surabaya 2</h5>
                                                        <p class="ms-5">Ruko Mega Galaxy Jl. Ir. Soekarno Blok 16 C No. 20 Kel. Klampis Ngasem, Kec. Sukolilo, Kota Surabaya, Jawa Timur. 60116</p>
                                                        <h5 class="fw-bolder">Bojonegoro</h5>
                                                        <p class="ms-5">Ruko Central U No. 11 Jl. Veteran Central 5-9 Kel. Jambean, Kec. Bojonegoro, Kab. Bojonegoro, Jawa Timur. 62115</p>
                                                        <h5 class="fw-bolder">Gresik</h5>
                                                        <p class="ms-5">Ruko Green Garden Blok A5/17 Jl. Dr. Wahidin Sudirohusodo Kel. Dahanrejo, Kec. Kobonmas, Kab. Gresik, Jawa Timur. 61124</p>
                                                        <h5 class="fw-bolder">Kertosono
                                                        <p class="ms-5">Jl. Supriadi No. 37-C Kel. Kudu, Kec. Kertosono Kab. Nganjuk, Jawa Timur.</p>
                                                        <h5 class="fw-bolder">Probolinggo</h5>
                                                        <p class="ms-5">Ruko Wiroborang Jl. Panglima Sudirman No. 420 Kel. Wiroborang, Kec. Mayangan, Kota Probolinggo, Jawa Timur. 62716</p>
                                                        <h5 class="fw-bolder">Tulungagung</h5>
                                                        <p class="ms-5">Jl. MT Haryono No. 9 el. Wadu Jaya, Kec. Kedungwaru Kab. Tulungagung, Jawa Timur. 66229</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- DIY -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">D.I.Y</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address5')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address5" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Yogyakarta</h5>
                                                      <p class="ms-5">JL. Gajah Mada No.21-23, kel.Pakulaman, Kec.Porwokinanti, Yogyakarta, 55112,</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Bali -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Bali</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address6')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address6" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Denpasar</h5>
                                                        <p class="ms-5">Pertokoan Sudirman Agung Blok C No.19, Dauh Puri Klod, Kec. Denpasar Bar, Kota Denpasar, Bali 80113</p>
                                                        <p class="ms-5">Telp : (0361) 255363</p>
                                                        <h5 class="fw-bolder">Tabanan</h5>
                                                        <p class="ms-5">Pertokoan Sudirman Agung Blok C No.19, Dauh Puri Klod, Kec. Denpasar Bar, Kota Denpasar, Bali 80113</p>
                                                        <p class="ms-5">Telp : (0361) 255363</p>
                                                        <h5 class="fw-bolder">Gianyar</h5>
                                                        <p class="ms-5">Jl. Bypass Dharma Giri No 789 Kel. Bitera, Kec. Gianyar, Kab. Gianyar, Bali. 80511</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End -->

                                                <!-- NTB -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Nusa Tenggara Barat</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address7')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address7" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Jambi</h5>
                                                        <p class="ms-5">JL. Sunan Giri No.99, Kec.Kota Baru, kel.Simpang Tiga Sipin, Jambi, 36126,</p>
                                                        <h5 class="fw-bolder">Muara Bungo</h5>
                                                        <p class="ms-5">Jl. Lintas Sumatera KM. 3 No. 139 Kel. Sungai Kerjan, Kec. Bungo Dani, Kab. Bungo, Jambi. 37212</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Sumsel -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sumatra Selatan</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address8')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address8" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Palembang</h5>
                                                        <p class="ms-5">JL.Dr Moh Hatta rt 18/rw 05 No.1067 A, Kelurahan Kemalaraja Kecamatan Baturaja Timur kabupaten Ogan Komring Ulu Provinsi Sumatra Selatan 32111</p>
                                                        <h5 class="fw-bolder">Baturaja</h5>
                                                        <p class="ms-5">Jl. Dr. Moh Hatta No. 1067 A, RT. 18/05 Kel. Kemalaraja, Kec. Baturaja, Kab. Ogan Komring Ulu, Sumatera Selatan. 3211</p>
                                                        <h5 class="fw-bolder">Lubuklinggau</h5>
                                                        <p class="ms-5">Jl. Sultan Mahmud Baddarudin Kel. Tanah Periuk, Kec. Lubuklinggau Selatan II, Kota Lubuklinggau, Sumatera Selatan. 31611</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End -->

                                                <!-- Sumbar -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sumatra Barat</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address9')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address9" class="address" style="display: none; margin-top: 10px;">
                                                        <h5 class="fw-bolder">Padang</h5>
                                                        <p class="ms-5">Jl. Kis Mangunsarkoro No. 3C Kel. Jati Baru, Kec. Padang Timur, Kota Padang, Sumatera Barat. 25129</p>
                                                        <h5 class="fw-bolder">Bukit Tinggi</h5>
                                                        <p class="ms-5">Jl. Veteran No. 213 A Kel. Kubu Gulai Bancah, Kec. Mandiangin Koto Selayan, Kota Bukittinggi, Sumatera Barat. 26122</p>
                                                    </div>
                                                </div>
                                                <!-- End -->

                                                <!-- Bengkulu -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Bengkulu</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address11')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address11" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Bangka</h5>
                                                        <p class="ms-5">Jl. Soekarno Hatta No. 18, RT. 09/03 Kel. Bukit Besar, Kec. Girimaya, Kota Pangkalpinang, Bangka Belitung. 33146</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- End -->


                                                <!-- Riau -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Riau</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address12')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address12" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Pekanbaru</h5>
                                                        <p class="ms-5">Jl. Sm Amin Komp Royal Platinum No 89 HH, Kec.Tampan, Kel.Simpang Baru</p>
                                                        <h5 class="fw-bolder">Batam</h5>
                                                        <p class="ms-5">Grand Niaga Mas Blok B No. 62 Kel. Belian, Kec. Batam Kota, Kota Batam, Kep Riau. 29464</p>
                                                        <h5 class="fw-bolder">Duri</h5>
                                                        <p class="ms-5">Jl. Hangtuah No. 7 Kel. Duri Barat, Kec. Mandau Kab. Bengkalis, Riau. 28884</p>
                                                    </div>
                                                </div>
                                                <!-- end -->

                                                <!-- Gorontalo -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Gorontalo</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address15')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address15" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Makasar</h5>
                                                        <p class="ms-5">Jl. Adhyaksa Lama No.20 Kel.Panakukang, Kel.Masale</p>
                                                        <h5 class="fw-bolder">Parepare</h5>
                                                        <p class="ms-5">Jl. Agussalim No 172 B, Kel.Ujung Kec.Labukkang, 91111</p>
                                                        <h5 class="fw-bolder">Palopo</h5>
                                                        <p class="ms-5">Jl. Jend. Sudirman (Poros Binturu) Kel. Binturu, Kec. Wara Selatan. Kota Palopo - Sulawesi Selatan 91926</p>
                                                        <h5 class="fw-bolder">Bone</h5>
                                                        <p class="ms-5">Jl. Sukawati Barat No. 17 K Kel. Macege, Kec. Tanete Riattang Barat, Kab. Bone, Sulawesi Selatan. 92732</p>
                                                        <h5 class="fw-bolder">Manado</h5>
                                                        <p class="ms-5">Pasar Segar Ruko RB No. 26Jl. Yos Sudarso Kel. Paal Dua, Kec. Tikala, Kota Manado, Sulawesi Selatan. 95129</p>
                                                    </div>
                                                </div>
                                                <!-- end-->

                                                <!-- Sulawesi Utara -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sulawesi Utara</h5>
                                                    <div class="d-flex align-items-center ms-5">
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address16')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address16" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Manado</h5>
                                                        <p class="ms-5">Jl.Yos Sudarso Paal 2 (Kompleks Pasar Segar) Kec.Paal Dua, Kel.Paal Dua</p>
                                                        <h5 class="fw-bolder">Rantau Prapat</h5>
                                                        <p class="ms-5">Jl. SM. Raja Komplek M88 No. 9H Kel. Bakaran Batu, Kec. Rantau Selatan, Kab. Labuhanbatu, Sumatera Utara. 21421</p>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                                <!-- Sulawesi Tengah -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Sulawesi Tengah</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
                                                        <button class="btn btn-outline-primary" onclick="toggleAddress('address19')"><i class="fa fa-eye"></i> Lihat Alamat</button>
                                                    </div>
                                                    <div id="address19" class="address" style="display: none; margin-top: 11px;">
                                                        <h5 class="fw-bolder">Palangkaraya</h5>
                                                        <p class="ms-5">JL.Temanggung Tilung komplek Pertokoan No.111 RT.002 RW.008 kec.Jekan Raya Kel.Menteng, 73111</p>
                                                        <h5 class="fw-bolder">Pangkalanbun</h5>
                                                        <p class="ms-5">Jl. Matnoor Kel. Baru, Kec. Arut Selatan, Kab. Kotawaringin Barat, Kalimantan Tengah. 74113</p>
                                                        <h5 class="fw-bolder">Sampit</h5>
                                                        <p class="ms-5">Ruko Biru Jl. Yos Sudarso No. 36, RT. 13/5 Kel. Mentawa Baru Hulu, Kec. Mentawa Baru Ketapang, Kab. Kotawaringin Timur, Kalimantan Tengah. 74322</p>
                                                    </div>
                                                </div>
                                                <!-- end -->

                                                <!-- Kalimantan Timur -->
                                                <div class="col-md-6 col-lg-4 mb-4">
                                                    <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                                    <h5 class="fw-bolder">Kalimantan Timur</h5>
                                                    <div class="d-flex align-items-center ms-5">
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap&libraries=&v=weekly" async></script>

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