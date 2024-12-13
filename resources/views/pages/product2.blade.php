<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2024 Porsche 911 (992) GT3 RS 'Weissach'</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/product.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Header Section -->
<div id="header-placeholder"></div>
<!-- End Header Section -->

<div class="container mt-5 section-1">
    <!-- Product Title & Price -->
    <div class="car-name d-flex justify-content-between align-items-center">
        <h1>2024 <b>Porsche</b> 911 (992) GT3 RS 'Weissach'</h1>
        <h2>€401,000</h2>
    </div>
    
    <!-- Countdown Timer -->
    <div class="d-flex align-items-center">
        <div id="countdown">08:21:59  </div>
        <div> | Reserve Not Met</div>
    </div>
    
    <!-- Main Image and Thumbnails -->
    <div class="row mt-5">
        <div class="col-md-8">
            <img src="/assets/images/carousal2.jpg" alt="Product Image" class="img-fluid" id="mainImage">
        </div>
        <div class="col-md-4">
            <div class="thumbnail-gallery">
                <img src="/assets/images/p1-1.jpg" class="img-thumbnail product-image" onclick="openModal('/assets/images/p1-1.jpg')">
                <img src="/assets/images/p1-2.jpg" class="img-thumbnail product-image" onclick="openModal('/assets/images/p1-2.jpg')">
                <img src="/assets/images/p1-3.jpg" class="img-thumbnail product-image" onclick="openModal('/assets/images/p1-3.jpg')">
                <img src="/assets/images/p1-4.jpg" class="img-thumbnail product-image" onclick="openModal('/assets/images/p1-4.jpg')">
            </div>
        </div>
    </div>

    <!-- Modal Structure (Single Instance) -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content-wrapper">
            <img class="modal-content" id="modalImage">
            <div class="nav-buttons">
                <span class="prev" onclick="changeImage('prev')">&#10094;</span>
                <span class="next" onclick="changeImage('next')">&#10095;</span>
            </div>
        </div>
    </div>

    <!-- Bid and Action Buttons -->
    <div class="mt-4">
        <button class="btn bid-btn btn-lg">Place a Bid</button>
        <button class="btn other-btn btn-outline-secondary">Watch</button>
        <button class="btn other-btn btn-outline-secondary">Share</button>
    </div>

    <!-- Tabbed Content for Details -->
    <ul class="nav nav-tabs image-navi mt-4" id="productTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="interior-tab" data-toggle="tab" href="#interior" role="tab">Interior</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="exterior-tab" data-toggle="tab" href="#exterior" role="tab">Exterior</a>
        </li>
        <!-- Add other tabs as needed -->
    </ul>
    <div class="tab-content" id="productTabContent">
        <div class="tab-pane fade show active" id="interior" role="tabpanel">
            <!-- Content for Interior tab -->
            <p>Interior details go here.</p>
        </div>
        <div class="tab-pane fade" id="exterior" role="tabpanel">
            <!-- Content for Exterior tab -->
            <p>Exterior details go here.</p>
        </div>
        <!-- Add other tab content as needed -->
    </div>

    <!-- Footer Details -->
    <div class="footer-values d-flex justify-content-between mt-4">
        <div>Views: 8.12K</div>
        <div>Watching: 32</div>
    </div>
</div>

<!-- Footer Section -->
<div id="footer-placeholder"></div>
<!-- End Footer Section -->

<script src="/assets/js/product.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
