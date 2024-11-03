@extends('front.layout')

<div class="breadcumbs py-2">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center text-white">
      <!-- <h2>Services</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Services</li> -->
      </ol>
    </div>
  </div>
</div>
<!-- end breadcumbs -->

<!-- services -->

<!-- Carousel Start -->
<div class="services mt-5 bg-light py-5">
  <div class="container">
    <div class="title-container text-center">
      <h2 class="fw-bold">PRODUK DAN LAYANAN</h2>
    </div>
    <div class="row mt-5">
      @foreach($services as $service)
       <div class="col-md-4">
          <div id="card" class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" 
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse{{ $service->id }}"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapse{{ $service->id }}">
            <div class="card-body">
              <div class="card-icon">
                <img src="image/{{$service->image}}" alt="" class="img-fluid" width="80">
              </div>
              <!-- Button untuk mengontrol collapse -->
              <div class="card-title fw-bolder mt-4">
                <a class="text-decoration-none text-dark">
                  {{$service->title}}
                </a>
              </div>
              <!-- Konten yang akan di-collapse -->
              <div class="collapse mt-3" id="collapse{{ $service->id }}">
                <p class="card-description">
                  {{$service->description}}
                </p>
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
      #card:hover {
          transform: scale(1.04);
        }
      .nav-link.active {
        color: #ff4081;
        /* Warna pink misalnya */
        border-bottom: 2px solid #ff4081;
        /* Garis bawah untuk elemen yang aktif */
      }

      .navbar {
        border-radius: 0 0 100px 0;
        /* Membuat lengkungan berbeda pada setiap sudut */
        overflow: visible;
        /* Mengubah overflow agar dropdown tidak terpotong */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Memberikan bayangan halus untuk efek kedalaman */
        z-index: 1000;
        /* Meningkatkan z-index agar navbar berada di atas elemen lain */
      }

      .navbar .dropdown-menu {
        border-radius: 0 0 15px 15px;
        /* Memberikan lengkungan pada dropdown agar serasi dengan navbar */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Memberikan bayangan agar terlihat elegan */
        z-index: 1050;
        /* Pastikan dropdown memiliki z-index lebih tinggi dari navbar */
      }
    </style>

    <!-- Kalkulator Simulasi Kredit -->
    <div class="container2">
    <!-- Kalkulator -->
    <div class="calculator">
        <h3>Harga Kendaraan On The Road (OTR)</h3>
        <input type="range" id="loanAmountRange" min="50000000" max="1000000000" step="10000000" value="480000000" class="slider">
        <div class="value-display">
            <span id="loanAmountDisplay">480 juta</span>
        </div>

        <h3>Uang Muka</h3>
        <input type="range" id="downPaymentRange" min="10" max="100" step="1" value="55" class="slider">
        <div class="value-display">
            <span id="downPaymentDisplay">55%</span>
        </div>

        <h3>Tenor</h3>
        <input type="range" id="loanTermRange" min="12" max="60" step="12" value="12" class="slider">
        <div class="value-display">
            <span id="loanTermDisplay">12 bulan</span>
        </div>

        <button onclick="calculateLoan()">Kalkulasi</button>
    </div>

    <!-- Estimasi -->
    <div class="estimation">
        <h3>Estimasi Angsuran Bulanan Anda</h3>
        <div class="result-display">
    <span id="result">Rp 19.xxx.xxx /bulan</span>
    </div>
        <p>Perhitungan tersebut hanya simulasi dan tidak mengikat. Perhitungan dan Estimasi Angsuran dapat berubah sesuai kriteria dan ketentuan pembiayaan yang berlaku di SMS Finance.
           Ajukan permohonan pembiayaan dan kami akan menghubungi Anda</p>
        <button class="apply-button">Ajukan Sekarang</button>
    </div>
  </div>


<style>
.container2 {
    display: flex;
    justify-content: space-between;
    max-width: 1000px;
    margin: 20px auto;
}

.calculator, .estimation {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 48%;
}

h3 {
    font-size: 1rem;
    margin-bottom: 10px;
}

.slider {
    width: 100%;
    margin-bottom: 10px;
}

.value-display {
    text-align: center;
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 20px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
}

button:hover {
    background-color: #0056b3;
}

.estimation .result-display {
    font-size: 2rem;
    font-weight: bold;
    color: #ff6600;
    margin: 75px 0;
}

.apply-button {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
}

.apply-button:hover {
    background-color: #cc5200;
}

</style>

<script>
// Ambil elemen-elemen dari HTML
const loanAmountRange = document.getElementById('loanAmountRange');
const downPaymentRange = document.getElementById('downPaymentRange');
const loanTermRange = document.getElementById('loanTermRange');

const loanAmountDisplay = document.getElementById('loanAmountDisplay');
const downPaymentDisplay = document.getElementById('downPaymentDisplay');
const loanTermDisplay = document.getElementById('loanTermDisplay');
const resultDisplay = document.getElementById('result');

// Fungsi untuk memformat nilai Rupiah
function formatRupiah(value) {
    let val = (value / 1).toFixed(0).replace('.', ',');
    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Update tampilan saat slider diubah
loanAmountRange.addEventListener('input', () => {
    loanAmountDisplay.textContent = formatRupiah(loanAmountRange.value) + ' juta';
});

downPaymentRange.addEventListener('input', () => {
    downPaymentDisplay.textContent = downPaymentRange.value + '%';
});

loanTermRange.addEventListener('input', () => {
    loanTermDisplay.textContent = loanTermRange.value + ' bulan';
});

// Fungsi untuk menghitung pinjaman
function calculateLoan() {
    const loanAmount = parseFloat(loanAmountRange.value);
    const downPaymentPercentage = parseFloat(downPaymentRange.value);
    const loanTerm = parseInt(loanTermRange.value);

    // Hitung uang muka
    const downPayment = (downPaymentPercentage / 100) * loanAmount;
    
    // Sisa jumlah pinjaman
    const loanPrincipal = loanAmount - downPayment;

    // Misalkan suku bunga tahunan adalah 6%
    const annualInterestRate = 0.06;
    const monthlyInterestRate = annualInterestRate / 12;

    // Rumus perhitungan angsuran bulanan
    const monthlyPayment = (loanPrincipal * monthlyInterestRate) / 
                           (1 - Math.pow(1 + monthlyInterestRate, -loanTerm));

    // Tampilkan hasil dengan format yang disembunyikan
    resultDisplay.textContent = maskRupiah(monthlyPayment);
}

// Fungsi untuk menyembunyikan nominal di hasil
function maskRupiah(number) {
    let numString = Math.floor(number).toString();
    
    // Ganti bagian tengah dengan "xxx"
    if (numString.length > 6) {
        numString = numString.slice(0, 2) + '.xxx.xxx';
    } else if (numString.length > 3) {
        numString = numString.slice(0, 1) + 'x.xxx.xxx';
    }
    
    return `Rp ${numString} /bulan`;
}

</script>

<!-- end 