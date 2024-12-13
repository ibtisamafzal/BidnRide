<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<script src="assets/js/owl.carousel.min.js"></script>
    <title>Bid & Ride</title>
</head>
<body> 
    <!-- Header Section -->
	<!-- Include Header -->
    @include('partials.header')
	<!-- End Header Section -->

    <!-- Featured Section -->
	<section class="featured-area">
		<div class="container-fluid text-center">
			<div class="featured-area-content">
				<div class="featured-text-row row ml-0 mr-0">
					<div id="carAuctionCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button> 
                            <button type="button" data-bs-target="#carAuctionCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
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
                                    <p>Cybertruck CyberBeast - Foundation Series</p>
                                </div>
                                <div class="bid-btn-container">
                                    <a href="#" class="btn btn-light">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-item" style="background-image: url('assets/images/f4.jpg');">
                                <div class="carousel-caption d-none d-md-block">
                                    <small>2008</small>
                                    <h5>FERRARI</h5>
                                    <p>599 GTM FIORANO F1</p>
                                </div>
                                <div class="bid-btn-container">
                                    <a href="#" class="btn btn-light">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-item" style="background-image: url('assets/images/f5.jpg');">
                                <div class="carousel-caption d-none d-md-block">
                                    <small>2020</small>
                                    <h5>FERRARI</h5>
                                    <p>MONZA SP1</p>
                                </div>
                                <div class="bid-btn-container">
                                    <a href="#" class="btn btn-light">Bid Now</a>
                                </div>
                            </div>
                            <div class="carousel-item" style="background-image: url('assets/images/f6.jpg');">
                                <div class="carousel-caption d-none d-md-block">
                                    <small>2005</small>
                                    <h5>FERRARI</h5>
                                    <p>F430 SPIDER</p>
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

    <!-- Latest-Auctions Section -->
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
							<div class="card" onclick="window.location.href='pages/product1.html';">
								<img src="assets/images/carousal5.jpg" class="card-img-top" alt="Ferrari">
								<div class="card-body">
									<h5 class="card-title">2008 Ferrari</h5>
									<p class="card-text">599 GTB Fiorano F1</p>
									<p class="card-text"><small class="text-muted">CONNECTICUT, USA</small></p>
									<p class="price">US$100,000</p>
									<p class="time-left">3 days left</p>
								</div>
							</div>
						</div>
				
						<div class="col-md-4">
							<div class="card" onclick="window.location.href='pages/product2.html';">
								<img src="assets/images/carousal2.jpg" class="card-img-top" alt="Tesla">
								<div class="card-body">
									<h5 class="card-title">2024 Porsche</h5>
									<p class="card-text">911 (992) GT3 RS 'Weissach'</p>
									<p class="card-text"><small class="text-muted">Dubai, United Arab Emirates</small></p>
									<p class="price">US$401,000</p>
									<p class="time-left">2 days left</p>
								</div>
							</div>
						</div>
				
						<div class="col-md-4">
							<div class="card" onclick="window.location.href='pages/product1.html';">
								<img src="assets/images/carousal3.jpg" class="card-img-top" alt="Ferrari">
								<div class="card-body">
									<h5 class="card-title">2005 Ferrari</h5>
									<p class="card-text">F430 Spider</p>
									<p class="card-text"><small class="text-muted">CONNECTICUT, USA</small></p>
									<p class="price">US$46,500</p>
									<p class="time-left">8 days left</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="latest-work-carousel row ml-0 mr-0">
					<div class="owl-carousel">
						<div><img src="assets/images/carousal1.jpg"></div>
						<div><img src="assets/images/carousal2.jpg"></div>
						<div><img src="assets/images/carousal3.jpg"></div>
						<div><img src="assets/images/carousal4.jpg"></div>
						<div><img src="assets/images/carousal5.jpg"></div>
						<div><img src="assets/images/carousal6.jpg"></div>
						<div><img src="assets/images/carousal7.jpg"></div>
						<div><img src="assets/images/carousal2.jpg"></div>
						<div><img src="assets/images/carousal3.jpg"></div>
						<div><img src="assets/images/carousal5.jpg"></div>
					</div>
				</div>
			</div>
		</div>

		

	</section>
	<!-- End Latest-Work Section -->


	<!-- Header Section -->
	<!-- Include Header -->
    @include('partials.footer')
	<!-- End Header Section -->

	<script src="assets/js/main.js"></script>

</body>
</html>