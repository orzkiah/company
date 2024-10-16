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
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="image/{{$service->image}}" alt="" class="img-fluid" width="80">
              </div>
              <!-- Button untuk mengontrol collapse -->
              <div class="card-title fw-bolder mt-4">
                <a class="text-decoration-none text-dark"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse{{ $service->id }}"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapse{{ $service->id }}">
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

      <!-- PRODUK DAN LAYANAN -->
      <style>
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
      <div class="credit-calculator mt-5 bg-white p-3 rounded shadow" style="max-width: 400px; margin: auto;">
        <h3 class="text-center mb-4" style="font-size: 1.25rem;">Simulasi Kredit</h3>
        <form id="creditCalculatorForm">
          <div class="mb-2">
            <label for="loanAmount" class="form-label" style="font-size: 0.875rem;">Jumlah Pinjaman:</label>
            <input type="number" class="form-control" id="loanAmount" placeholder="Masukkan jumlah pinjaman" style="font-size: 0.875rem; padding: 0.5rem;">
          </div>
          <div class="mb-2">
            <label for="interestRate" class="form-label" style="font-size: 0.875rem;">Bunga (%):</label>
            <input type="number" class="form-control" id="interestRate" placeholder="Masukkan bunga tahunan" style="font-size: 0.875rem; padding: 0.5rem;">
          </div>
          <div class="mb-2">
            <label for="loanTerm" class="form-label" style="font-size: 0.875rem;">Tenor Pinjaman (bulan):</label>
            <input type="number" class="form-control" id="loanTerm" placeholder="Masukkan tenor pinjaman" style="font-size: 0.875rem; padding: 0.5rem;">
          </div>
          <button type="button" class="btn btn-primary" onclick="calculateLoan()" style="padding: 0.5rem 1rem; font-size: 0.875rem;">Hitung Cicilan</button>
        </form>

        <div class="mt-3">
          <h5 style="font-size: 0.875rem;">Hasil Perhitungan:</h5>
          <p id="result" class="fw-bold" style="font-size: 0.875rem;"></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    function calculateLoan() {
      // Ambil nilai dari input
      var principal = parseFloat(document.getElementById('loanAmount').value);
      var annualInterest = parseFloat(document.getElementById('interestRate').value);
      var months = parseInt(document.getElementById('loanTerm').value);

      if (isNaN(principal) || isNaN(annualInterest) || isNaN(months) || principal <= 0 || annualInterest <= 0 || months <= 0) {
        alert('Silakan masukkan nilai yang valid.');
        return;
      }

      // Hitung bunga bulanan
      var monthlyInterest = annualInterest / 12 / 100;

      // Hitung cicilan bulanan menggunakan rumus annuity
      var monthlyPayment;
      if (monthlyInterest > 0) {
        monthlyPayment = principal * (monthlyInterest * Math.pow(1 + monthlyInterest, months)) / (Math.pow(1 + monthlyInterest, months) - 1);
      } else {
        monthlyPayment = principal / months;
      }

      // Tampilkan hasil
      document.getElementById('result').innerText = 'Cicilan Bulanan: Rp ' + monthlyPayment.toFixed(2);
    }
  </script>

  <!-- end 