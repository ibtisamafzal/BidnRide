<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Section -->
    <header class="site-header fixed-top">
        <div class="mini-header">
            <div class="container">
                <div class="row ml-0 mr-0">
                    <div class="header-contact col-sm-6">
                        <span><i class="far fa-envelope"></i>sales@bidnride.com</span>
                        <span><i class="fas fa-mobile-alt"></i>+92-3366569117</span>
                    </div>
                    <div class="header-social col-sm-6">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-gmail"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container">
                <div class="row ml-0 mr-0">
                    <div class="logo col-sm-3">
                        <img src="../assets/images/logo-main.png" alt="Bid&Ride Logo">
                    </div>
                    <div class="menu-container col-sm-9">
                        <nav class="main-menu">
                            <ul class="menu">
                                <li><a href="pages/auctions.html">AUCTIONS</a></li>
                                <li><a href="#">RESULTS</a></li>
                                <li><a href="#">SELL</a></li>
                                <li><a href="/pages/faq.html">FAQ</a></li>
                                <li><a href="/pages/about.html">ABOUT</a></li>
                                <li><a href="/pages/team.html">TEAM</a></li>
                                <li><a href="{{ route('pages.signup') }}"><button class="btn signup-btn">Sign Up!</button></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <script src="assets/js/main.js"></script>
</body>
</html>