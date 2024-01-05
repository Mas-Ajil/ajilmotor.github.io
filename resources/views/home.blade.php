@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('container')
  
<!-- Jumbotron -->
<div class="jumbotron">
  <h1 class="display-4">Welcome to the auto shop</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <p>Temukan kebebasan berkendara tanpa batas dengan motor ini — inovasi, performa maksimal, dan gaya yang memikat, semua dalam satu paket yang siap menghadirkan pengalaman berkendara yang luar biasa!</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Pelajari lebih lanjut</a>
</div>

<!-- Section: Fitur -->
<section class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <h2>Power Shift Pro</h2>
            <p>Nikmati pengalaman berkendara tanpa henti dengan teknologi Quick Shifter, memungkinkan pergantian gigi seketika untuk akselerasi tanpa gangguan.</p>
        </div>
        <div class="col-md-4">
            <h2>Turbo Thrust X</h2>
            <p>Dengan fitur Quick Shifter, Turbo Thrust X memberikan performa maksimal dengan transisi gigi yang halus, memberikan sensasi berkendara yang tanpa cela.</p>
        </div>
    </div>
  </section>
  

<!-- Section: Berita Terbaru -->
<video autoplay loop muted>
    <source src="/asset/bg.mp4" type="video/mp4"> <!-- Update the video file path -->
    Your browser does not support the video tag.
</video>

<section class="container text-center">
    <h2 class="text-center mb-4 mt-4">New Product</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-bg" >
                <div class="main">
                    <div class="wrap">
                        <img src="asset/b1.jpg" alt="">
                        <img src="asset/b2.jpg" alt="">
                        <img src="asset/b3.jpg" alt="">
                        <img src="asset/b4.jpg" alt="">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bg" >
                <div class="main">
                    <div class="wrap">
                        <img src="asset/k1.jpg" alt="">
                        <img src="asset/k2.jpg" alt="">
                        <img src="asset/k3.jpg" alt="">
                        <img src="asset/k4.jpg" alt="">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bg">
                <div class="main">
                    <div class="wrap">
                        <img src="asset/a1.jpg" alt="">
                        <img src="asset/a2.jpg" alt="">
                        <img src="asset/a3.jpg" alt="">
                        <img src="asset/a4.jpg" alt="">
                    </div>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>





  

@endsection