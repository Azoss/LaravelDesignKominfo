@extends('layouts.user')

@section('header')
    <style>
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }
        #hero{
            background: url('{{asset('user/images/BST.png')}}') top center;
        }
        .image-center{
          display: block;
          margin-left: 6.5px;
          margin-right: 6.5px;
          width: 100%;
        } 
    </style>    
@endsection

@section('hero')
    <div class="hero-container">
        <div class="hero-logo">
            <img src="{{ asset('user/images/LOGO-PEMKOT-1-2.png') }}" alt="Pemkot Surakarta Logo">
        </div>
        <a href="#about" class="btn-get-started">Cari Hal tentang Surakarta</a>
    </div>
@endsection



@section('content')

      <!--========================== Berita Terkini Section ============================-->
      <section id="category">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Berita Terkini</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row">
  
          <div class="row" id="category-wrapper">
            @foreach ($categories as $category)
                <div class="col-md-4 col-sm-12 category-item filter-app" >
                      <a href="">
                        <img src="{{asset('category_image/'.$category->image)}}" class="image-center">
                        <div class="details">
                          <h4>{{$category->name}}</h4>
                          <span>{{$category->description}}</span>
                        </div>
                      </a>
                </div>
            @endforeach  
          </div>
  
        </div>
      </section><!-- #category -->
      
      <!--========================== Services Section ============================-->
      <section id="services">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Mengapa Memilih Kami?</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box">
                <div class="icon"><i class="fa fa-shield"></i></div>
                <h4 class="title">Keamanan Berkendara</h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box">
                <div class="icon"><i class="fa fa-money"></i></div>
                <h4 class="title">Harga Ekonomis</h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <div class="box">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <h4 class="title">Kenyamanan Pelanggan</h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- #services -->
  
      <!--========================== Call To Action Section ============================-->
      <section id="call-to-action">
        <div class="container wow fadeIn">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Bergabung dan Bepergian Bersama Kami</h3>
              <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Contact</a>
            </div>
          </div>
  
        </div>
      </section><!-- #call-to-action -->
  
      <!--========================== Gallery Section ============================-->
      <section id="contact" style="padding-bottom:85px">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Galeri</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>
  
        <div class="container wow fadeInUp">
          <div class="row justify-content-center">
  
            <div class="col-lg-12 col-md-4">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/prambanan.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata2.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata3.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata4.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata5.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata6.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata7.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata8.png')}})">
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #contact -->
@endsection
