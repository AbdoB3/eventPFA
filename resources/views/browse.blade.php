@extends('layouts.app')
@section('content')
    <!-- Blog Start -->
    <div class="meeta-blog section-padding">
        <div class="container">
            <div class="meeta-blog-grid-wrap " >
                <div class="row">
                    @foreach ($event as $e)
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
                            <div class="single-blog card" style="height: 370px">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="{{ asset($e->image) }}" alt="" width="200px" height="200px"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="category">{{ $e->titre }}</span>
                                        <span class="date">{{ $e->date_debut }}</span>
                                    </div>
                                    <h3 class="title"><a href="/detailles/{id}">Registration for opening workshop </a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                    @endforeach

                    <!-- Techmax Pagination Start -->
                    <div class="meeta-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="flaticon-back"></i></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="flaticon-next"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Techmax Pagination End -->
                </div>
            </div>
        </div>
        <!-- Blog End -->
    @endsection
