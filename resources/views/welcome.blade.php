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
                <div class="col-xl-8 col-lg-10">
                    <div class="section-tittle text-center mb-70">
                        <h3>Our Love Story Kanda kuri imwe muri izinkuru ziri mwibara ryumutuku​</h3>
                        <img src="assets/img/gallery/tittle_img.png" alt=""></br>

                        <div class="row">
                            @foreach ($story as $item)
                            <div class="col-lg-4">
                                <p class=" btn btn-successfull"><a href="Read/{{$item->id}}">{{$item->Title }}</a></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="story-caption background-img mb-40" style="background-image: url(assets/img/gallery/story2.jpg);">
                        <div class="story-details">
                            <h4>Inama mubuzima</h4>
                            <p>Ntukihutire kubabaza bishobotse wababazwa kuko uwakubabaje igikomere ntigishira ariko wowe kirashira</p>
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
