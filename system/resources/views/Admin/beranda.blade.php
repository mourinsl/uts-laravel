@extends('Admin.template.base')
@section('content')

<div class="container">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Beranda</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
</div>
    <div class="container" style="margin-left: 50px; ">
      <h3>Selamat Datang</h3>
      <h1>
        @if(Auth::check())
            {{request()->user()->nama}}
      <div class="container">
        <div class="row">
      <a href="{{url('beranda')}}" class="btn btn-light float-left mt-5"><i class="fas fa-sign-in-alt"><b> Masuk kehalaman Mourin - Blogs</b></i></a>
      </div>
      </div>
        @else
            Login Terlebih Dahulu
        @endif
      </h1>
    </div>

@endsection