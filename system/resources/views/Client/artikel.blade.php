<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mourin-Blogs</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
@include('Client.template.head')

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Mourin - Blogs</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('beranda')}}">Beranda</a></li>
          <li><a class="active" href="{{url('postingan')}}">Postingan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Postingan</h2>

          <ol>
            <li><a href="{{url('beranda')}}">Beranda</a></li>
            <li><a href="{{url('postingan')}}">Postingan</a></li>
            <li>{{$postingan->judul}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{url('artikel', $postingan->id)}}">{{$postingan->judul}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$postingan->penulis->nama}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$postingan->updated_at->diffForHumans()}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!! nl2br ($postingan->isi) !!}
                </p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-tags"></i>
                <ul class="cats">
                  <li><a href="#">{{$postingan->tags->nama}}</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->
            <div class="blog-comments">\
              <h4 class="comments-count">Komentar</h4>
                  @foreach($postingan->komentar()->orderBy('created_at','desc')->get() as $komentar)
              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="{{url('public')}}/Client/assets/img/blog/pp.png" alt=""></div>
                  <div>
                    <h5><a href="">{{$komentar->nama_komentar}}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">{{$komentar->created_at->diffForHumans()}}</time>
                    <p>
                      {{$komentar->isi}}
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->
                  @endforeach

              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="" method="post">
                  @csrf
                  <div class="row">
                    <input type="hidden" name="postingan_id" value="{{$postingan->id}}">
                    <div class="col-md-6 form-group">
                      <input name="nama_komentar" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="isi" class="form-control" type="text" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach($list_tags as $tags)
                  <li><a href="#">{{$tags->nama}} <span>{{$tags->postingan_count}} </span></a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('Client.template.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('Client.template.js')

</body>

</html>