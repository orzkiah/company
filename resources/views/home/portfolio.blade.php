@extends('front.layout')
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