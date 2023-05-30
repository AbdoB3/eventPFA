{{-- <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body> --}}
@extends('layouts.app')
@section('content')
    <!-- Page Banner End -->

    <!-- Event Single Start -->
    <div class="meeta-event-single section-padding">
        <div class="container">
            <div class="meeta-event-single-wrap">
                <div class="row">

                    <div class="col-lg-8">
                        <!-- Event Single Content Start -->
                        <div class="event-single-content">
                            <!-- Video Start -->
                            <div class="meeta-video-section-2">

                                <div class="video-img text-center"
                                    style="background-image: url({{ asset($events->image) }});">
                                    <!-- Section Title Start -->
                                    <div class="meeta-section-title-2 section-title-4">
                                        <h2 class="main-title">Digital Workshop <br> Conferencee 2021</h2>
                                    </div>
                                    <!-- Section Title End -->
                                    <a class="popup-video" href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk"><i
                                            class="fas fa-play"></i></a>
                                </div>

                            </div>
                            <!-- Video End -->
                            <textarea rows="10" cols="91" class="border-white bg-white mt-5 text-black text-bold fst-italic" disabled>{{ $events->content }}</textarea>
                            <div class="event-single-item">
                                <h3 class="title">Event Speakers</h3>
                                <div class="speakers-content-wrap">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <!-- Single Speaker Start -->
                                            <div class="single-speker-3">
                                                <div class="speker-img">
                                                    <a href="speaker-single.html"><img
                                                            src="assets/images/speaker/speaker-7.jpg" alt=""></a>
                                                    <div class="speker-content text-center">
                                                        <h3 class="name">Mike Fermalin</h3>
                                                        <span class="designation">Lead Speaker</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Speaker End -->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- Single Speaker Start -->
                                            <div class="single-speker-3">
                                                <div class="speker-img">
                                                    <a href="speaker-single.html"><img
                                                            src="assets/images/speaker/speaker-8.jpg" alt=""></a>
                                                    <div class="speker-content text-center">
                                                        <h3 class="name">Megan Fox</h3>
                                                        <span class="designation">Graphic Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Speaker End -->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <!-- Single Speaker Start -->
                                            <div class="single-speker-3">
                                                <div class="speker-img">
                                                    <a href="speaker-single.html"><img
                                                            src="assets/images/speaker/speaker-9.jpg" alt=""></a>
                                                    <div class="speker-content text-center">
                                                        <h3 class="name">Joakim Ken</h3>
                                                        <span class="designation">Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Speaker End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-single-item">
                                <h3 class="title">Event Sponsor</h3>
                                <div class="meeta-event-sponsors-3">
                                    <!-- Sponsor Start -->
                                    <div class="meeta-sponsor-wrap">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-1.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-2.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-3.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-4.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-5.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/logo-sm-6.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="{{ asset('assets/images/logo-sm-7.png') }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="meeta-sponsor-logo">
                                                    <a href="#"><img src="assets/images/brand-logo-1.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sponsor En
                                                                    d -->
                                </div>
                            </div>
                        </div>
                        <!-- Event Single Content End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Event Single Sidebar Start -->
                        <div class="event-single-sidebar">
                            <form action="/store" method="POST">
                                @csrf
                                <input type="hidden" name="idevents" value="{{ $events->id }}">
                                <div class="btn-price mt-4">
                                    <button class="btn btn-primary mb-2 rounded" type="submit">Get You're Ticket</button>
                                    <div>
                                        <div class="price">

                                           <button disabled> <select id="prix" class="select-box " name="price"></button>
                                                <option class="disabled text-danger text-bold fs-3">Price</option>
                                                <option class="text-bold fst-italic fw-bold">{{ $events->prix_1 }}</option>
                                                <option class="text-bold fst-italic fw-bold">{{ $events->prix_2 }}</option>
                                                <option class="text-bold fst-italic fw-bold">{{ $events->prix_3 }}</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="sidebar-item">

                                    <div class="event-details">
                                        <h3 class="sidebar-title">Details</h3>
                                        <ul>
                                            <li>
                                                <h5 class="title ">Start:</h5>
                                                <p class="text-bold fst-italic fw-bold">{{ $events->date_debut }}</p>
                                            </li>
                                            <li>
                                                <input type="number" placeholder="quantity" class="btn-light"
                                                    name="qte">
                                            </li>
                            </form>
                            <li>
                                <h5 class="title">End:</h5>
                                <p class="text-bold fst-italic fw-bold">{{ $events->date_fin }}</p>
                            </li>
                            <li>
                                <h5 class="title">Location :</h5>
                                <p>{{ $events->villes->name }}</p>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <!-- Countdown Start -->
                        <div class="meeta-countdown countdown" data-countdown="{{ $events->date_debut }}" data-format="short">
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
                            <br>
                            <br>
                            <!-- Countdown End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    {{-- <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>


    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/back-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>



</body>



</html> --}}
