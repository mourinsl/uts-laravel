<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mourin-Blogs</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

@include('Client.template.head')
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Mourin - Blogs</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{url('beranda')}}">Beranda</a></li>
          <li><a href="{{url('postingan')}}">Postingan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mourin - Blogs</span></h2>
          <p class="animate__animated animate__fadeInUp">
            Ini merupakan sebuah blog yang dibuat untuk memenuhi UTS mata kuliah Desain dan Pemrograman Web 2. Jika kalian ingin membaca postingan saya silahkan klik tombol dibawah ini!
          </p>
          <a href="{{url('postingan')}}" class="btn-get-started animate__animated animate__fadeInUp">Klik Disini</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('Client.template.js')

</body>

</html>