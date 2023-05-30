@extends('layouts.app')
@section('content')

   <!-- Blog Details Start -->
   <div class="section blog-details-section section-padding">
    <div class="container">
        <!-- Blog Details Wrap Start -->
        <div class="blog-details-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Details Post Start -->
                    <div class="blog-details-post">
                        <!-- Single Blog Start -->
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <img src="{{ asset('assets/3.jpeg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <span class="category color-4">Conference</span>
                                <div class="blog-meta">
                                    <span class="meta"><i class="far fa-user"></i>  <a href="#">Yassine Bessabess</a></span>
                                    <span class="meta"><i class="far fa-calendar-alt"></i> 13 Août, 2022</span>
                                </div>
                                <h3 class="title">CEO EVENTRICKS </h3>
                                <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, epic adventures oday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives.</p>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                        <div class="blog-details-content">
                            <!-- Blog Blockquote Start -->
                            <div class="blog-quote">
                                <blockquote class="blockquote">
                                    <p>Progress is impossible without change, and those who cannot change their minds cannot change anything. </p>
                                </blockquote>
                            </div>
                            <!-- Blog Blockquote End -->
                            <!-- Blog Details Text Start -->
                            <div class="blog-details-text">
                                <h3 class="title">Defaulting to Mindfulness</h3>
                                <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, epic adventures oday most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives. </p>
                            </div>
                            <!-- Blog Details Text End -->
                            <!-- Blog Details Tag Share Start -->
                            <div class="blog-details-tag-share">
                                <div class="blog-details-tag">
                                    <div class="sidebar-widget">
                                        <span class="label">Tags :</span>
                                        <ul class="sidebar-tag">
                                            <li><a href="#">LMS</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Courses</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-share">
                                    <span class="share-title">Share This Post</span>
                                    <ul class="social-share">
                                        <li><a class="share-facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="share-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="share-pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Blog Details Tag Share End -->
                            <!-- Blog Details Post Navigation Start -->

                            <!-- Blog Details Post Navigation End -->
                            <!-- Commtent Wrap Start -->

                            <!-- Commtent Wrap End -->
                        </div>
                    </div>
                    <!-- Blog Details Post End -->
                </div>
                <div class="col-lg-4">
                    <!-- Blog Sidebar Start -->
                    <div class="blog-sidebar">
                        <!-- Sidebar Widget Start -->

                        <!-- Sidebar Widget End -->

                        <!-- Sidebar Widget Start -->

                        <hr>
                        <!-- Sidebar Widget End -->

                        <!-- Sidebar Widget Start -->
                        <div class="sidebar-widget">
                            <!-- Widget Title Start -->
                            <div class="widget-title">
                                <h3 class="title">Categories</h3>
                            </div>
                            <!-- Widget Title End -->
                            <!-- Widget Category Start -->
                            <ul class="category">
                                <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Industry <span class="post-count">(11)</span></a></li>
                                <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Business <span class="post-count">(02)</span></a></li>
                                <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Construction <span class="post-count">(0)</span></a></li>
                                <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Factory <span class="post-count">(231)</span></a></li>
                                <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Estate <span class="post-count">(45)</span></a></li>
                            </ul>
                            <!-- Widget Category End -->
                        </div>
                        <!-- Sidebar Widget End -->

                        <!-- Sidebar Widget Start -->
                        <div class="sidebar-widget">
                            <div class="widget-banner" style="background-image: url({{ asset('assets/Image1.jpg') }});">
                                <h4 class="sub-title">Upcoming Events</h4>
                                <h3 class="title">2022 Creative meetup & music event</h3>
                                <a class="btn btn-primary" href="price.html">Book Your Seat</a>
                            </div>
                        </div>
                        <!-- Sidebar Widget End -->
                    </div>
                    <!-- Blog Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Blog Details Wrap End -->
    </div>
</div>
<!-- Blog Details End -->

@endsection
