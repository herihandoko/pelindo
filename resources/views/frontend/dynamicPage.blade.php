@php
    $page_title = $page->title;
@endphp
@extends('frontend.layouts.master')
@section('content')
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
          <![endif]-->
    @include(getHeader())
    <!--********************************
           Code Start From Here
         ******************************** -->
    <!--==============================
        Hero Area
        ==============================-->
    <div class="themeholy-hero-wrapper hero-5" id="hero">
        <div class="heroSlider2 hero-slider-wrap-5">
            <div class="hero-slider-5 number-dots themeholy-carousel" id="heroSlide1">
                @foreach (@App\Models\Slider::all() as $item)
                <div class="themeholy-hero-slide">
                    <div class="themeholy-hero-bg" data-bg-src="{{ MediaImage($item->image, 1) }}">
                    </div>
                    <div class="container">
                        <div class="hero-style5">
                            <span class="hero-subtitle"><img src="{{ asset('assets/frontend/assets/img/shape/title_left.svg') }}" alt="shape">{{ $item->title }}</span>
                            <h1 class="hero-title">{{ $item->subtitle }}</h1>
                            <p class="hero-text">
                                {{$item->description}}
                            </p>
                            <div class="btn-group mt-50"><a href="{{ $item->button_link }}" class="themeholy-btn">{{ $item->button }}<span class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="hero-indicator-area">
            <div class="hero-indicator5" data-asnavfor=".hero-slider-5">
                @foreach (@App\Models\Slider::all() as $item)
                <a class="indicatior-btn active"><img src="{{ MediaImage($item->image, 1) }}" alt="img"></a>
                @endforeach
            </div>
        </div>
        <div class="indicator-number">
            <div class="indicator-wrapper">
                <div class="number-pagination">01<span class="paging1"></span></div>
                <div class="progress-wrapper">
                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <span class="slider__line sr-only"></span>
                    </div>
                </div>
                <div class="total-pagination">03<span class="paging2"></span></div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
        Feature Area
        ==============================-->
    <section class="feature-sec space-top">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="feature-grid style4">
                        <div class="feature-grid_shape"
                            data-bg-src="{{ asset('assets/frontend/assets/img/shape/shape_2.png') }}"></div>
                        <div class="feature-grid_icon">
                            <img src="{{ asset('assets/frontend/assets/img/icon/feature_2_1.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-grid_title">Fasilitas Dermaga</h3>
                            <p class="feature-grid_text">Layanan Dermaga Kami yang Modern dan Terpercaya</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="feature-grid style4">
                        <div class="feature-grid_shape"
                            data-bg-src="{{ asset('assets/frontend/assets/img/shape/shape_2.png') }}"></div>
                        <div class="feature-grid_icon">
                            <img src="{{ asset('assets/frontend/assets/img/icon/feature_2_2.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-grid_title">Fasilitas Kapal</h3>
                            <p class="feature-grid_text">Jelajahi keunggulan dan kehandalan kami yang inovatif</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="feature-grid style4">
                        <div class="feature-grid_shape"
                            data-bg-src="{{ asset('assets/frontend/assets/img/shape/shape_2.png') }}"></div>
                        <div class="feature-grid_icon">
                            <img src="{{ asset('assets/frontend/assets/img/icon/feature_2_4.svg') }}" alt="icon">
                        </div>
                        <div>
                            <h3 class="feature-grid_title">Bongkar Muat</h3>
                            <p class="feature-grid_text">Proses logistik kami yang canggih, efisien dan terpercaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        About Area
        ==============================-->
    <div class="position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box5 pe-xl-5">
                        <div class="img7">
                            <div class="about-image">
                                <img src="{{ asset('assets/frontend/assets/img/normal/about_7.jpg') }}" alt="About">
                                <div class="about-video">
                                    <a href="https://youtu.be/nVLKuMgLA00" class="white-play-btn popup-video mb-40"><i
                                            class="fa-sharp fa-solid fa-play"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="img8">
                            <img src="{{ asset('assets/frontend/assets/img/normal/about_8.jpg') }}" alt="About">
                        </div>
                        <div class="shape4">
                        </div>
                        <div class="about-counter-5">
                            <div class="about-counter">
                                <h2 class="counter-card_number"><span class="counter-number">25</span>+</h2>
                                <p class="counter-card_text">Tahun Melayani</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area pe-xl-5 mb-20">
                        <span class="sub-title"><img src="{{ asset('assets/frontend/assets/img/shape/title_left.svg') }}"
                                alt="shape">Tentang Kami</span>
                        <h2 class="sec-title">PT. PELABUHAN INDONESIA (PERSERO) REGIONAL 2 BANTEN
                        </h2>
                    </div>
                    <p class="mb-25">PT. Pelabuhan Indonesia II (Persero) Cabang Banten atau dikenal sebagai Pelabuhan
                        Umum Ciwandan terletak di Kecamatan Ciwandan Kota Cilegon Provinsi Banten dengan kordinat :
                        06⁰-01'-12'' LS dan 105⁰-7'-05'' BT, .</p>
                    <div class="achive-about-list">
                        <div class="checklist">
                            <ul>
                                <li>Pelayanan terbaik</li>
                                <li>Ekosistem maritim terintegrasi</li>
                                <li>Jaringan maritim nasional</li>
                                <li>Pengelolaan efisien</li>
                            </ul>
                        </div>
                        <div class="btn-group mt-45">
                            <a href="about.html" class="themeholy-btn">Selengkapnya<i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="about-profile">
                                <div class="about-avater">
                                    <img src="{{ asset('assets/frontend/assets/img/shape/about-thumb_1.png') }}"
                                        alt="about">
                                </div>
                                <div class="media-body">
                                    <h6 class="title">AGUNG FITRIANTO,IR.MSC.</h6>
                                    <span class="desig">General Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Servce Area
        ==============================-->
    <section class="overflow-hidden service-sec bg-smoke space" id="service-sec"
        data-bg-src="{{ asset('assets/frontend/assets/img/bg/service_bg_5.png') }}">
        <div class="container">
            <div class="title-area mt-n1 text-center">
                <span class="sub-title"><img src="{{ asset('assets/frontend/assets/img/shape/title_left.svg') }}"
                        alt="shape">Layanan Kami</span>
                <h2 class="sec-title">Layanan Ekosistem Maritim Nasional</h2>
            </div>
            <div class="row slider-shadow themeholy-carousel" data-slide-show="4" data-xl-slide-show="3"
                data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                data-arrows="true">
                @foreach (@App\Models\Service::all() as $item)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('assets/frontend/assets/img/service/service_2_1.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_wrapper">
                            <div class="service-card_content" data-bg-src="{{ asset('assets/frontend/assets/img/service/pattern_1_1.svg') }}">
                                <div class="service-card_icon"><img src="{{ asset('assets/frontend/assets/img/icon/service_2_1.svg') }}" alt=""></div>
                                <h3 class="service-card_title"><a href="service-details.html">{{ $item->title }}</a></h3>
                                <p class="service-card_desc">Sosusi Transportasi Laut Handal Dan Efisien</p>
                            </div>
                            <div class="share-option">
                                <div class="share-link">
                                    <i class="fa-sharp fa-regular fa-arrow-up"></i>
                                </div>
                                <div class="team-social2">
                                    <div class="icon-team-list">
                                        <a href="service-details.html" class="ser-icon"><i
                                                class="fa-sharp fa-regular fa-arrow-up"></i>
                                            <p class="ser-title"> Lihat</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('assets/frontend/assets/img/service/service_2_2.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_wrapper">
                            <div class="service-card_content"
                                data-bg-src="{{ asset('assets/frontend/assets/img/service/pattern_1_1.svg') }}">
                                <div class="service-card_icon"><img
                                        src="{{ asset('assets/frontend/assets/img/icon/service_2_2.svg') }}"
                                        alt=""></div>
                                <h3 class="service-card_title"><a href="service-details.html">Jasa Barang</a></h3>
                                <p class="service-card_desc">Kemudahan Sarana Dan Prasarana Angkutan</p>
                            </div>
                            <div class="share-option">
                                <div class="share-link">
                                    <i class="fa-sharp fa-regular fa-arrow-up"></i>
                                </div>
                                <div class="team-social2">
                                    <div class="icon-team-list">
                                        <a href="service-details.html" class="ser-icon"><i
                                                class="fa-sharp fa-regular fa-arrow-up"></i>
                                            <p class="ser-title"> Lihat</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('assets/frontend/assets/img/service/service_2_3.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_wrapper">
                            <div class="service-card_content"
                                data-bg-src="{{ asset('assets/frontend/assets/img/service/pattern_1_1.svg') }}">
                                <div class="service-card_icon"><img
                                        src="{{ asset('assets/frontend/assets/img/icon/service_2_3.svg') }}"
                                        alt=""></div>
                                <h3 class="service-card_title"><a href="service-details.html">Rupa-Rupa Usaha</a></h3>
                                <p class="service-card_desc">Navigasi Sukses Bersama Kami</p>
                            </div>
                            <div class="share-option">
                                <div class="share-link">
                                    <i class="fa-sharp fa-regular fa-arrow-up"></i>
                                </div>
                                <div class="team-social2">
                                    <div class="icon-team-list">
                                        <a href="service-details.html" class="ser-icon"><i
                                                class="fa-sharp fa-regular fa-arrow-up"></i>
                                            <p class="ser-title"> Lihat</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('assets/frontend/assets/img/service/service_2_4.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_wrapper">
                            <div class="service-card_content"
                                data-bg-src="{{ asset('assets/frontend/assets/img/service/pattern_1_1.svg') }}">
                                <div class="service-card_icon"><img
                                        src="{{ asset('assets/frontend/assets/img/icon/service_2_4.svg') }}"
                                        alt=""></div>
                                <h3 class="service-card_title"><a href="service-details.html">Jasa Dermaga</a></h3>
                                <p class="service-card_desc">Penyedia Dermaga Luas dan Profesional</p>
                            </div>
                            <div class="share-option">
                                <div class="share-link">
                                    <i class="fa-sharp fa-regular fa-arrow-up"></i>
                                </div>
                                <div class="team-social2">
                                    <div class="icon-team-list">
                                        <a href="service-details.html" class="ser-icon"><i
                                                class="fa-sharp fa-regular fa-arrow-up"></i>
                                            <p class="ser-title"> Lihat</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_img">
                            <img src="{{ asset('assets/frontend/assets/img/service/service_2_5.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card_wrapper">
                            <div class="service-card_content"
                                data-bg-src="{{ asset('assets/frontend/assets/img/service/pattern_1_1.svg') }}">
                                <div class="service-card_icon"><img
                                        src="{{ asset('assets/frontend/assets/img/icon/service_2_5.svg') }}"
                                        alt=""></div>
                                <h3 class="service-card_title"><a href="service-details.html">Jasa Penumpukan</a></h3>
                                <p class="service-card_desc">Pusat Distribusi Luas Dan Profesional</p>
                            </div>
                            <div class="share-option">
                                <div class="share-link">
                                    <i class="fa-sharp fa-regular fa-arrow-up"></i>
                                </div>
                                <div class="team-social2">
                                    <div class="icon-team-list">
                                        <a href="service-details.html" class="ser-icon"><i
                                                class="fa-sharp fa-regular fa-arrow-up"></i>
                                            <p class="ser-title"> Selengkapnya</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
    <!--==============================
        Video Area
        ==============================-->
    <div class="video-area-4 overflow-hidden space-top"
        data-bg-src="{{ asset('assets/frontend/assets/img/bg/video_bg_5.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="title-area mb-20">
                        <span class="sub-title"><img src="{{ asset('assets/frontend/assets/img/shape/title_left.svg') }}"
                                alt="shape">Jelajahi Keunggulan Kami</span>
                        <h2 class="sec-title text-white">Gerbang Logistik Unggulan dengan Fasilitas Terdepan!</h2>
                        <p class="sec-description">Temukan keunggulan pelabuhan Banten dengan fasilitas modern dan
                            berstandar internasional untuk mendukung kelancaran dan efisiensi aktivitas logistik perusahaan
                            Anda.</p>
                    </div>
                    <div class="checklist style5">
                        <ul>
                            <li>Infrastruktur Modern</li>
                            <li>Keamanan Terjamin</li>
                            <li>Konektivitas Optimal</li>
                        </ul>
                    </div>
                    <div class="btn-group mt-45">
                        <a href="about.html" class="themeholy-btn">Hubungi Kami!<i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="video-image">
                        <img src="{{ asset('assets/frontend/assets/img/normal/video_5.jpg') }}" alt="">
                        <div class="video-5">
                            <h3 class="video-title">Lihat Video</h3>
                            <a href="https://www.youtube.com/watch?v=ADmQTw4qqTY"
                                class="white-play-btn popup-video mb-40"><i class="fa-sharp fa-solid fa-play"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Blog Area
        ==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="title-area mt-n1 text-center">
                <span class="sub-title"><img src="{{ asset('assets/frontend/assets/img/shape/title_left.svg') }}"
                        alt="shape">Wawasan Berita</span>
                <h2 class="sec-title">Informasi Pencapaian dan Inovasi </h2>
            </div>
            <div class="row slider-shadow themeholy-carousel" id="blogSlide3" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('assets/frontend/assets/img/blog/blog_3_1.jpg') }}" alt="blog image">
                            <div class="blog-meta">
                                <span class="date">15 Maret</span>
                            </div>
                            <div class="blog-box_content">
                                <h3 class="blog-title box-title"><a href="blog-details.html">Rumah Berdaya Cilegon dan
                                        Pelindo Banten Kolaborasi Lakukan Penguatan UMKM</a></h3>
                                <a href="blog-details.html" class="line-btn">Selengkapnya<i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('assets/frontend/assets/img/blog/blog_3_2.jpg') }}" alt="blog image">
                            <div class="blog-meta">
                                <span class="date">16 Mei</span>
                            </div>
                            <div class="blog-box_content">
                                <h3 class="blog-title box-title"><a href="blog-details.html">PELINDO REGIONAL 2 BANTEN
                                        SOSIALISASI IMPLEMENTASI PEMBAYARAN AUTOCOLLECTION</a></h3>
                                <a href="blog-details.html" class="line-btn">Selengkapnya<i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('assets/frontend/assets/img/blog/blog_3_3.jpg') }}" alt="blog image">
                            <div class="blog-meta">
                                <span class="date">17 April</span>
                            </div>
                            <div class="blog-box_content">
                                <h3 class="blog-title box-title"><a href="blog-details.html">Pelindo Regional 2 Banten
                                        Menggelar Acara Survei Kepuasan & Ketidakpuasan Pelanggan Tahun 2021</a></h3>
                                <a href="blog-details.html" class="line-btn">Selengkapnya<i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('assets/frontend/assets/img/blog/blog_3_4.jpg') }}" alt="blog image">
                            <div class="blog-meta">
                                <span class="date">18 July</span>
                            </div>
                            <div class="blog-box_content">
                                <h3 class="blog-title box-title"><a href="blog-details.html">Pelindo Regional 2 Banten
                                        Menggelar Sunatan Masal Gratis</a></h3>
                                <a href="blog-details.html" class="line-btn">Selengkapnya<i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    @include(getFooter())
    <!--********************************
           Code End  Here
         ******************************** -->

    <!-- Scroll To Top -->
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- end wrapper -->
@endsection
