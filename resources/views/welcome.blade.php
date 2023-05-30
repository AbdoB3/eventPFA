@extends('layouts.app')
{{-- @section('title', 'Accueil') --}}
@section('content')
    <!-- Slider Section Start  -->
    <div class="meeta-hero-section-5 d-flex align-items-center"
        style="background-image: url(assets/images/bg/hero-5-bg.jpg);">
        <img class="image-1" src="images/hello.png" alt="">
        <img class="image-2" src="images/Ultra-HD.png" alt="">
        <img class="shape-1" src="assets/images/shape/hero-5-shape-1.png" alt="">
        <img class="shape-2" src="assets/images/shape/hero-5-shape-2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="title-wrap text-center">
                            <h2 class="title" data-aos-delay="700" data-aos="fade-up">Find event</h2>
                            <h3 class="sub-title" data-aos-delay="800" data-aos="fade-up">Awesome event, conference & fest
                                around you</h3>
                        </div>
                        <div class="search-form-wrap" data-aos-delay="900" data-aos="fade-up">
                            <div class="search-form-inner">
                                <form class="search-form" action="search" method="POST">
                                    @csrf
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-search"></i></label>
                                        <input type="text" placeholder="Type Event Name" name="key">
                                        {{-- @foreach ($events as $event)
                                            <i>{{ $event->titre }}</i>
                                        @endforeach --}}
                                    </div>
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-list-alt"></i> Category</label>
                                        <select>
                                            <option value="0">Select Category</option>
                                            @foreach ($events as $event)
                                                <option value="1">{{ $event->category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="single-form">
                                        <label class="form-label"><i class="fas fa-map"></i> Location</label>
                                        <select>
                                            <option value="0">Select Location</option>
                                            @foreach ($events as $event)
                                                <option value="1">{{ $event->villes->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-btn">
                                        <button class="search-btn"><i class="flaticon-loupe"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="popular-tag" data-aos-delay="1000" data-aos="fade-up">
                            <span class="label">Popular:</span>
                            @foreach ($events as $event)
                                <ul>
                                    <li><a href="#"> {{ $event->category->name }} </a></li>

                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Category Section Start -->
    <div class="meeta-category-section section-padding-02">
        <div class="container">
            <div class="meeta-category-wrap">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title">Browse by <span class="title-shape-1">Category</span></h2>
                </div>
                <!-- Section Title End -->
                <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2">
                    @foreach ($categories as $c)
                    <div class="col">
                        <!-- Category Item Start -->
                        <div class="category-item">
                            <a href="/browse/{{ $c->id }}">
                                <img src="{{ asset($c->image) }}" alt=""></a>
                        </div>
                        <!-- Category Item End -->

                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Category Section End -->

        <!-- Trending Section Start -->
        <div class="meeta-trending-section section-padding">
            <div class="trending-shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
            <img class="trending-shape-2" src="assets/images/shape/trend-shape-2.png" alt="">
            <img class="trending-shape-3" src="assets/images/shape/trend-shape-3.png" alt="">
            <img class="trending-shape-4" src="assets/images/shape/trend-shape-4.png" alt="">
            <img class="trending-shape-5" src="assets/images/shape/trend-shape-5.png" alt="">
            <div class="container">
                <div class="meeta-trending-wrap">
                    <!-- Section Title Start -->
                    <div class="meeta-section-title section-title-4 text-center">
                        <h2 class="main-title">Trending By <span class="title-shape-2">Cities</span></h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="meeta-trending-content-wrap meeta-trending-active slider-bullet">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Trending Item Start -->
                                    <div class="trending-item">
                                        <div class="trending-thumb">
                                            <img src="assets/images/trending/trend-1.jpg" alt="">
                                            <div class="trending-city">
                                                <span class="city">Paris</span>
                                            </div>
                                            <div class="trending-content">
                                                <h3 class="title"><a href="#">Food Festival in summer night</a>
                                                </h3>
                                                <span class="date">23 Jun 2022<span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Trending Item Start -->
                                    <div class="trending-item">
                                        <div class="trending-thumb">
                                            <img src="assets/images/trending/trend-2.jpg" alt="">
                                            <div class="trending-city">
                                                <span class="city">New York</span>
                                            </div>
                                            <div class="trending-content">
                                                <h3 class="title"><a href="#">Cultural summit <br> 2022</a></h3>
                                                <span class="date">23 Jun 2022<span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Trending Item Start -->
                                    <div class="trending-item">
                                        <div class="trending-thumb">
                                            <img src="assets/images/trending/trend-3.jpg" alt="">
                                            <div class="trending-city">
                                                <span class="city">Melbourne</span>
                                            </div>
                                            <div class="trending-content">
                                                <h3 class="title"><a href="#">Cycling fest summer 2022</a></h3>
                                                <span class="date">23 Jun 2022<span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Item End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Trending Item Start -->
                                    <div class="trending-item">
                                        <div class="trending-thumb">
                                            <img src="assets/images/trending/trend-4.jpg" alt="">
                                            <div class="trending-city">
                                                <span class="city">Moscow</span>
                                            </div>
                                            <div class="trending-content">
                                                <h3 class="title"><a href="#">Concert for charity for children </a>
                                                </h3>
                                                <span class="date">23 Jun 2022<span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Trending Item End -->
                                </div>

                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Section End -->

        <!-- Featured Section Start -->
        <div class="meeta-featured-section section-padding">
            <div class="shape-1"></div>
            <div class="shape-2" data-aos-delay="700" data-aos="zoom-in"></div>
            <div class="container">
                <div class="meeta-featured-wrap">
                    <!-- Section Title Start -->
                    <div class="meeta-section-title section-title-4 text-center">
                        <h2 class="main-title"><span class="title-shape-1">Featured </span>Events</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="meeta-event-featured ">
                        <div class="row">
                            @foreach ($events as $event)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single Item Start -->
                                    <div class="single-item flex-wrap">
                                        <div class="featured-img">
                                            <a href="/detailles/{{ $event->id }}"><img src="{{ asset($event->image) }}"
                                                    width="150px" height="150px" alt=""></a>

                                        </div>
                                        <div class="featured-content card" style="max-height: 170px">
                                            {{-- <span class="category color-4 mt-5">{{ $event->category->name }}</span> --}}
                                            <h3 class="title text-black mt-4 text-bold fs-5 "><a
                                                    href="/detailles/{{ $event->id }}">{{ $event->titre }}</a></h3>
                                            <br>
                                            <span class="meta mt-3 text-black me-5 ms-2 mb-3"><i
                                                    class="fas fa-map-marker-alt"></i>
                                                {{ $event->villes->name }}</span>
                                            <span class="meta mt-5">
                                                <strong class="text-danger">{{ $event->prix_1 }}
                                                    $</strong></span>
                                        </div>
                                    </div>



                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Featured Section End -->

        <!-- Project Start -->
        <div class="meeta-event-project section-padding">
            <div class="container">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title"><span class="title-shape-1">Upcoming</span> Events</h2>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Project Wrap Start -->
            <div class="meeta-event-project-wrap event-project-active slider-bullet">
                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="event-project-thumb"
                                    style="background-image: url(assets/sky-concert.jpeg);">
                                </div>
                                <div class="event-project-content">
                                    <h3 class="title"> sky Festival         </h3>
                                    <div class="event-meta">
                                        <span><i class="far fa-clock"></i> 29 July - 30 July</span>
                                        <span><i class="fas fa-map-marker-alt"></i> Sand diego, Canada</span>
                                    </div>
                                    <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                        <div class="meeta-register-countdown-wrapper">

                                            <!-- Countdown Start -->
                                            <div class="meeta-countdown countdown" data-countdown="2022/09/21"
                                                data-format="short">
                                                <div class="single-countdown">
                                                    <span class="count countdown__time daysLeft"></span>
                                                    <span class="value countdown__time daysText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time hoursLeft"></span>
                                                    <span class="value countdown__time hoursText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time minsLeft"></span>
                                                    <span class="value countdown__time minsText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time secsLeft"></span>
                                                    <span class="value countdown__time secsText"></span>
                                                </div>
                                            </div>
                                            <!-- Countdown End -->
                                        </div>
                                    </div>
                                    <a class="btn-2" href="price.html">Book Your Seat</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="event-project-thumb"
                                    style="background-image: url(assets/images/up-event-2.jpg);">
                                </div>
                                <div class="event-project-content">
                                    <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                    <div class="event-meta">
                                        <span><i class="far fa-clock"></i> 29 July - 30 July</span>
                                        <span><i class="fas fa-map-marker-alt"></i> Sand diego, Canada</span>
                                    </div>
                                    <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                        <div class="meeta-register-countdown-wrapper">

                                            <!-- Countdown Start -->
                                            <div class="meeta-countdown countdown" data-countdown="2024/10/24"
                                                data-format="short">
                                                <div class="single-countdown">
                                                    <span class="count countdown__time daysLeft"></span>
                                                    <span class="value countdown__time daysText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time hoursLeft"></span>
                                                    <span class="value countdown__time hoursText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time minsLeft"></span>
                                                    <span class="value countdown__time minsText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time secsLeft"></span>
                                                    <span class="value countdown__time secsText"></span>
                                                </div>
                                            </div>
                                            <!-- Countdown End -->
                                        </div>
                                    </div>
                                    <a class="btn-2" href="price.html">Book Your Seat</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="event-project-thumb"
                                    style="background-image: url(assets/images/up-event-3.jpg);">
                                </div>
                                <div class="event-project-content">
                                    <h3 class="title">Mindfull App Pi Meets Soundproof Booth 2021 summer</h3>
                                    <div class="event-meta">
                                        <span><i class="far fa-clock"></i> 29 July - 30 July</span>
                                        <span><i class="fas fa-map-marker-alt"></i> Sand diego, Canada</span>
                                    </div>
                                    <div class="meeta-register-countdown register-countdown-4 register-countdown-5">
                                        <div class="meeta-register-countdown-wrapper">

                                            <!-- Countdown Start -->
                                            <div class="meeta-countdown countdown" data-countdown="2024/10/24"
                                                data-format="short">
                                                <div class="single-countdown">
                                                    <span class="count countdown__time daysLeft"></span>
                                                    <span class="value countdown__time daysText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time hoursLeft"></span>
                                                    <span class="value countdown__time hoursText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time minsLeft"></span>
                                                    <span class="value countdown__time minsText"></span>
                                                </div>
                                                <div class="single-countdown">
                                                    <span class="count countdown__time secsLeft"></span>
                                                    <span class="value countdown__time secsText"></span>
                                                </div>
                                            </div>
                                            <!-- Countdown End -->
                                        </div>
                                    </div>
                                    <a class="btn-2" href="price.html">Book Your Seat</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Project Wrap End -->
        </div>
        <!-- Project End -->

        <!-- Event Sponsors Start -->
        <div class="meeta-event-sponsors-4 meeta-event-sponsors-5 section-padding"
            style="background-image: url(assets/images/bg/sponsor-5-bg.jpg);">
            <div class="container">

                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title">Event by <shape class="title-shape-1">Organizer</shape>
                    </h2>
                </div>
                <!-- Section Title End -->

                <!-- Sponsor Start -->
                <div class="meeta-sponsor-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Sponsor Box Start -->
                            <div class="meeta-sponsor-item-box sponsor-box-1">

                                <div class="meeta-sponsor-logo sponsor-logo-1">
                                    <a href="#"><img src="{{ asset('assets/casa-events.png') }}" width="170 px" height="200px" alt=""></a>
                                </div>
                                <div class="meeta-sponsor-logo sponsor-logo-2">
                                    <a href="#"><img src="{{ asset('assets/hit-radio.webp') }}"width="200px" height="160px" alt=""></a>
                                </div>

                            </div>
                            <!-- Sponsor Box End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Sponsor Box Start -->
                            <div class="meeta-sponsor-item-box sponsor-box-2">

                                <div class="meeta-sponsor-logo sponsor-logo-3">
                                    <a href="#"><img src="{{ asset('assets/uradio.png') }}" alt="" width="200px" height="100px"></a>
                                </div>
                                <div class="meeta-sponsor-logo sponsor-logo-4">
                                    <a href="#"><img src="assets/images/sponsors-11.png" alt=""></a>
                                </div>

                            </div>
                            <!-- Sponsor Box End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Sponsor Box Start -->
                            <div class="meeta-sponsor-item-box sponsor-box-3">

                                <div class="meeta-sponsor-logo sponsor-logo-5">
                                    <a href="#"><img src="assets/images/sponsors-6.png" alt=""></a>
                                </div>
                                <div class="meeta-sponsor-logo sponsor-logo-6">
                                    <a href="#"><img src="assets/images/sponsors-10.png" alt=""></a>
                                </div>

                            </div>
                            <!-- Sponsor Box End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Sponsor Box Start -->
                            <div class="meeta-sponsor-item-box sponsor-box-4">
                                <div class="meeta-sponsor-logo sponsor-logo-7">
                                    <a href="#"><img src="assets/images/sponsors-8.png" alt=""></a>
                                </div>
                                <div class="meeta-sponsor-logo sponsor-logo-8">
                                    <a href="#"><img src="{{ asset('assets/3w.jpg') }}" alt="" width="200px" height="100px"></a>
                                </div>

                            </div>
                            <!-- Sponsor Box End -->
                        </div>
                    </div>
                </div>
                <!-- Sponsor End -->

            </div>
        </div>
        <!-- Event Sponsors End -->

        <!-- Blog Start -->
        <div class="meeta-blog-3 section-padding">
            <div class="container">
                <!-- Section Title Start -->
                <div class="meeta-section-title section-title-4 text-center">
                    <h2 class="main-title"><span class="title-shape-2">Tips</span> & Articles</h2>
                </div>
                <!-- Section Title End -->
                <div class="meeta-blog-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog-3">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="category color-4">Conference</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="date">Octobor 09, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Registration for opening workshop </a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog-3">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="category color-1">Conference</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="date">Octobor 09, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Registration for opening workshop </a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog-3">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg"
                                            alt=""></a>
                                    <div class="top-meta">
                                        <span class="category color-2">Conference</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="date">Octobor 09, 2022</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Registration for opening workshop </a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Newsletter Section Start -->
        <div class="newsletter-section">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <!-- Newsletter Text Start -->
                            <div class="newsletter-text">
                                <h3 class="title">Subscribe to our newsletter</h3>
                            </div>
                            <!-- Newsletter Text End -->
                        </div>
                        <div class="col-lg-7">
                            <!-- Newsletter Form Start -->
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Your Email">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <!-- Newsletter Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
