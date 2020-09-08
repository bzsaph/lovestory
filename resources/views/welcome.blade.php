@extends('layouts.home')
@section('content')

<main>
    <!--? Slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-8 col-lg-6 col-md-8 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".3s">Date i don't know </span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">Me<strong> & </strong> You</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">will get married</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-8 col-lg-6 col-md-8 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".3s">Date i don't know </span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">Me<strong> & </strong> You</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">will get married</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!--? Our Story Start -->
    <div class="Our-story-area story-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-70">
                        <h2>Our Love Story​</h2>
                        <img src="assets/img/gallery/tittle_img.png" alt="">
                        <p>Byarinkiki gihe ubwo james na kelly bahuraga arimugitondo jemes araza arimuri muri siporo abona kelly  ntimuzacikwe niyinkuru</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="story-caption background-img mb-40" style="background-image: url(assets/img/gallery/story2.jpg);">
                        <div class="story-details">
                            <h4>Inama mubuzima</h4>
                            <p>Ntukihurire kubabaza bishobotse wababazwa kuko uwakubabaje igikomere ntigishira ariko wowe kirashira</p>
                            <p>Jya ugira ishuti yateye imbere kuruta ikigerageza </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="story-img">
                        <img  class="story2" src="assets/img/gallery/story1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->
    <!--? Services Start -->
    <section class="pricing-card-area section-padding30 section-bg" data-background="assets/img/gallery/section_bg1.png">
        <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-70">
                        <h2>Ubukwe bwumustari</h2>
                        <img src="assets/img/gallery/tittle_img.png" alt="">
                        <p>Ubukwe Bwumusitari bukurura beshi ariko butwara meshi </p>
                    </div>
                </div>
            </div>
            {{-- <div class="row align-items-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span class="flaticon-chart"></span>
                            <h4>The Ceremony</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>April 20, 2016</li>
                                <li><i class="far fa-clock"></i>5:30 PM</li>
                                <li><i class="fas fa-map-marker-alt"></i>The Mayflower Hotel</li>
                                <li>1127 Connecticut Avenue,NY</li>
                                <li><i class="far fa-map"></i> Check out the map</li>
                            </ul>
                        </div>
                        <div class="card-buttons mt-30">
                            <a href="#" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card active text-center mb-30">
                        <div class="card-top">
                            <span class="flaticon-project"></span>
                            <h4>The Reception</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>April 20, 2016</li>
                                <li><i class="far fa-clock"></i>5:30 PM</li>
                                <li><i class="fas fa-map-marker-alt"></i>The Mayflower Hotel</li>
                                <li>1127 Connecticut Avenue,NY</li>
                                <li><i class="far fa-map"></i> Check out the map</li>
                            </ul>
                        </div>
                        <div class="card-buttons mt-30">
                            <a href="#" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span class="flaticon-award"></span>
                            <h4>The Party</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>April 20, 2016</li>
                                <li><i class="far fa-clock"></i>5:30 PM</li>
                                <li><i class="fas fa-map-marker-alt"></i>The Mayflower Hotel</li>
                                <li>1127 Connecticut Avenue,NY</li>
                                <li><i class="far fa-map"></i> Check out the map</li>
                            </ul>
                        </div>
                        <div class="card-buttons mt-30">
                            <a href="#" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Services Card End -->



    <section class="brand-area section-padding-b">
        <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <h2>Urifuza Kuba umwe Mubandika Inkuru</h2>
                        <img src="assets/img/gallery/tittle_img.png" alt="">
                        <p>Twandikire kuri email :yanjye.com@gmail.com</p>
                        <p>Twandikire kuri email :0788377874</p>
                    </div>
                </div>
            </div>
            {{-- <div class="brand-active brand-border">
                <div class="single-brand">
                    <img src="assets/img/service/brand1.jpg" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/service/brand2.jpg" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/service/brand3.jpg" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/service/brand4.jpg" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/service/brand5.jpg" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/service/brand3.jpg" alt="">
                </div>
            </div> --}}
            {{-- /var/www/html//public> --}}
        </div>
    </section>
    <!-- Gallery-2 img Start-->
    <div class="gallery-area2 fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-active owl-carousel">
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery01.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery02.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery03.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery04.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery05.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery06.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery07.png" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="assets/img/gallery/gallery08.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection
