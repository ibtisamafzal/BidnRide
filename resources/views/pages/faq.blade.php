@extends('layout')

@section('title', 'FAQ | Bid & Ride')

@section('content')
    <!-- FAQ Header -->
    <section class="faq-header text-center py-5">
        <div class="container">
            <h1>FAQ</h1>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 style="font-family: 'Verdana', sans-serif;" class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="row">
                <!-- General Questions Section -->
                <div style="align-items: center;" class="faq-category" id="general">
                    <h4 style="text-align: center;">General</h4>
                    <div class="faq-item">
                        <button class="faq-question">What is Bid & Ride?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Bid & Ride is an online platform that connects car buyers and sellers through live bidding. Whether you want to sell your car or buy a used one, we provide a seamless and transparent bidding experience.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How do I create an account on Bid & Ride?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">To create an account, click on the "Sign Up" button on our homepage. Provide your basic details, including name, email, and contact information, and you're good to go.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Is Bid & Ride available in my country?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Currently, Bid & Ride operates in select regions. Please check our "Service Areas" page to see if we are available in your country or city.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How do I get support if I face issues?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">If you need help, you can contact our support team through the "Contact Us" page or reach out to our customer service via email or phone.</div>
                    </div>
                </div>

                <!-- Buying Questions Section -->
                <div style="align-items: center;" class="faq-category" id="buying">
                    <h4 style="text-align: center;">Buying a Car</h4>
                    <div class="faq-item">
                        <button class="faq-question">How do I place a bid on a car?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">To place a bid, first browse through the car listings, select the car you're interested in, and enter your bid amount. If you are the highest bidder when the auction ends, you will win the car.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Can I inspect the car before bidding?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Yes, you can arrange for an inspection before placing your bid. Contact the seller directly through the platform to schedule a time for the inspection.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">What happens if I win the auction?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">If you win the auction, you will receive an email confirmation with payment instructions. Once payment is complete, you can arrange the pickup or delivery of the car.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How can I ensure that the car I buy is in good condition?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">We encourage buyers to thoroughly inspect the car or request a professional inspection before bidding. Additionally, all listings provide detailed information and vehicle history reports when available.</div>
                    </div>
                </div>

                <!-- Selling Questions Section -->
                <div style="align-items: center;" class="faq-category" id="selling">
                    <h4 style="text-align: center;">Selling a Car</h4>
                    <div class="faq-item">
                        <button class="faq-question">How do I sell my car on Bid & Ride?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">To sell your car, sign up and create a listing by providing details about your car, including make, model, year, mileage, and any other relevant information. Once listed, it will be available for bidding on our platform.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Is there a fee to list my car for sale?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Yes, there is a small listing fee to post your car for sale on Bid & Ride. The fee details will be displayed during the listing process.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How do I know if my car has sold?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">You will receive a notification once your car has sold, and the payment will be processed according to our terms. You can also view the status of your listings in your account dashboard.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Can I edit my car listing after posting it?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Yes, you can edit your listing details anytime before the auction ends. Simply log in to your account, navigate to your car listings, and make the necessary updates.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{--  Explanation:
Extend layout.blade.php:

@extends('layout') ensures that the page includes the header and footer.
Use @section for Page Content:

All FAQ-specific content is placed inside the @section('content') block.
Removed Duplicate Header and Footer:

The placeholders (id="header-placeholder" and id="footer-placeholder") were removed because the layout handles this.
 --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/main.js"></script>

    <!-- Owl Carousel -->
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<script src="/assets/js/owl.carousel.min.js"></script>
    <title>FAQ | Bid & Ride</title>
</head>
<body>
    <!-- Header Section -->
	<div id="header-placeholder"></div>
	<!-- End Header Section -->

    <!-- FAQ Header -->
<section class="faq-header text-center py-5">
    <div class="container">
        <h1>FAQ</h1>

    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 style="font-family: 'Verdana', sans-serif;" class="text-center mb-5">Frequently Asked Questions</h2>
        <div class="row">
            <div class="row">
                <!-- General Questions Section -->
                <div style="align-items: center;" class="faq-category" id="general">
                    <h4 style="text-align: center;">General</h4>
                    <div class="faq-item">
                        <button class="faq-question">What is Bid & Ride?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Bid & Ride is an online platform that connects car buyers and sellers through live bidding. Whether you want to sell your car or buy a used one, we provide a seamless and transparent bidding experience.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How do I create an account on Bid & Ride?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">To create an account, click on the "Sign Up" button on our homepage. Provide your basic details, including name, email, and contact information, and you're good to go.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Is Bid & Ride available in my country?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Currently, Bid & Ride operates in select regions. Please check our "Service Areas" page to see if we are available in your country or city.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How do I get support if I face issues?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">If you need help, you can contact our support team through the "Contact Us" page or reach out to our customer service via email or phone.</div>
                    </div>
                </div>

                <!-- Buying Questions Section -->
                <div style="align-items: center;" class=" faq-category" id="buying">
                    <h4 style="text-align: center;">Buying a Car</h4>
                    <div class="faq-item">
                        <button class="faq-question">How do I place a bid on a car?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">To place a bid, first browse through the car listings, select the car you're interested in, and enter your bid amount. If you are the highest bidder when the auction ends, you will win the car.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Can I inspect the car before bidding?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Yes, you can arrange for an inspection before placing your bid. Contact the seller directly through the platform to schedule a time for the inspection.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">What happens if I win the auction?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">If you win the auction, you will receive an email confirmation with payment instructions. Once payment is complete, you can arrange the pickup or delivery of the car.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How can I ensure that the car I buy is in good condition?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">We encourage buyers to thoroughly inspect the car or request a professional inspection before bidding. Additionally, all listings provide detailed information and vehicle history reports when available.</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Selling Questions Section -->
                <div style="align-items: center;" class=" faq-category" id="selling">
                    <h4 style="text-align: center;">Selling a Car</h4>
                    <div class="faq-item">
                        <button class="faq-question">How do I sell my car on Bid & Ride?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">To sell your car, sign up and create a listing by providing details about your car, including make, model, year, mileage, and any other relevant information. Once listed, it will be available for bidding on our platform.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Is there a fee to list my car for sale?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Yes, there is a small listing fee to post your car for sale on Bid & Ride. The fee details will be displayed during the listing process.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">How do I know if my car has sold?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">You will receive a notification once your car has sold, and the payment will be processed according to our terms. You can also view the status of your listings in your account dashboard.</div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Can I edit my car listing after posting it?<span class="toggle-icon">+</span></button>
                        <div class="faq-answer">Yes, you can edit your listing details anytime before the auction ends. Simply log in to your account, navigate to your car listings, and make the necessary updates.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
	<div id="footer-placeholder"></div>
	<!-- End Footer Section -->

</body>
</html> --}}
