@extends('layouts.app')

@section('content')
<div class="about-us-detail mt-5 about-background">
   <div class="container">
     <div class="title-container text-center">
       <h2 class="fw-bold">TENTANG KAMI - DETAIL</h2>
     </div>
     <div class="row mt-5">
       <div class="col-md-12">
         <center>
           <h3 class="fw-bold about-us-title">
             {{$about->judul}}
           </h3>
         </center>
         <center>
           <p class="fw-bolder mt-4 about-us-subtitle">
             {{$about->subjudul}}
           </p>
         </center>
       </div>
       <div class="col-md-12 mt-5">
         <p class="fw-bolder">Deskripsi Lengkap</p>
         <p>
           {{$about->deskripsi_1}}
         </p>
         <ul class="list-group list-group-flush mt-4">
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
         <p class="mt-4">
           {{$about->deskripsi_2}}
         </p>
       </div>
     </div>
     <div class="marquee-container mt-4">
       <div class="marquee">
         <h4>PT GRATAMA FINANCE TELAH DIBERI IZIN DAN DIAWASI OLEH OJK</h4>
       </div>
     </div>
   </div>
</div>
@endsection
