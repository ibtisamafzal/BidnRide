@extends('layout')

@section('title', 'Home | Bid & Ride')

@section('content')
    <!-- Featured Section -->
    <section class="featured-area">
        <div class="container-fluid text-center">
            <div class="featured-area-content">
                <div id="carAuctionCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image: url('assets/images/f1.jpg');">
                            <div class="carousel-caption d-none d-md-block">
                                <small>2020</small>
                                <h5>PORSCHE</h5>
                                <p>935 (GT2 RS BASED)</p>
                            </div>
                            <div class="bid-btn-container">
                                <a href="#" class="btn btn-light">Bid Now</a>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('assets/images/f2.jpg');">
                            <div class="carousel-caption d-none d-md-block">
                                <small>2024</small>
                                <h5>GAC AION</h5>
                                <p>HYPER SSR 'SPRINT EDITION' -1225 HP</p>
                            </div>
                            <div class="bid-btn-container">
                                <a href="#" class="btn btn-light">Bid Now</a>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('assets/images/f3.jpg');">
                            <div class="carousel-caption d-none d-md-block">
                                <small>2024</small>
                                <h5>TESLA</h5>
                                <p>CyberTruck CyberBeast - Foundation Series</p>
                            </div>
                            <div class="bid-btn-container">
                                <a href="#" class="btn btn-light">Bid Now</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carAuctionCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carAuctionCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Latest Auctions Section -->
    <section id="auctions" class="latest-work">
        <div class="container">
            <div class="latest-work-content">
                <div class="latest-work-head row ml-0 mr-0 text-center">
                    <h2>Latest Auctions</h2>
                    <p>Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor.</p>
                </div>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" onclick="window.location.href='{{ route('product2') }}';" style="cursor: pointer;">
                                <img src="assets/images/carousal5.jpg" class="card-img-top" alt="Ferrari">
                                <div class="card-body">
                                    <h5 class="card-title">2008 Ferrari</h5>
                                    <p class="card-text">599 GTB Fiorano F1</p>
                                    <p class="price">US$100,000</p>
                                    <p class="time-left">3 days left</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route('product2') }}" class="btn btn-light">Bid Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card" onclick="window.location.href='{{ route('product2') }}';" style="cursor: pointer;">
                                <img src="assets/images/carousal2.jpg" class="card-img-top" alt="Tesla">
                                <div class="card-body">
                                    <h5 class="card-title">2024 Porsche</h5>
                                    <p class="card-text">911 (992) GT3 RS 'Weissach'</p>
                                    <p class="price">US$401,000</p>
                                    <p class="time-left">2 days left</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route('product2') }}" class="btn btn-light">Bid Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card" onclick="window.location.href='{{ route('product2') }}';" style="cursor: pointer;">
                                <img src="assets/images/carousal3.jpg" class="card-img-top" alt="Ferrari">
                                <div class="card-body">
                                    <h5 class="card-title">2005 Ferrari</h5>
                                    <p class="card-text">F430 Spider</p>
                                    <p class="price">US$46,500</p>
                                    <p class="time-left">8 days left</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route('product2') }}" class="btn btn-light">Bid Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Auctions Section -->
@endsection
