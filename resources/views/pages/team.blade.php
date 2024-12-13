@extends('layout')

@section('title', 'Team Page')

@section('content')
<section class="team-section text-center py-5">
    <div class="container">
        <h2 class="section-title">Team <span class="text-primary">Members</span></h2>
        <p class="section-description">
            Our enthusiastic team of industry professionals is always ready to assist you, whether you need guidance on the auction process or require assistance with any aspect of your account.
        </p>
        <div class="row justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="https://via.placeholder.com/200" alt="Adnan Tariq" class="rounded-circle team-img">
                    <h4 style="margin-top: 10px;" class="name">Adnan Tariq</h4>
                    <p class="title">Co-Founder</p>
                    <p class="location">Pakistan</p>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="https://via.placeholder.com/200" alt="Ibtisam Afzal" class="rounded-circle team-img">
                    <h4 style="margin-top: 10px;" class="name">Ibtisam Afzal</h4>
                    <p class="title">CEO & Co-Founder</p>
                    <p class="location">Pakistan</p>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="https://via.placeholder.com/200" alt="Mukarram Mushtaq" class="rounded-circle team-img">
                    <h4 style="margin-top: 10px;" class="name">Mukarram Mushtaq</h4>
                    <p class="title">Managing Director</p>
                    <p class="location">Pakistan</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endpush


{{--  Explanation of Changes
Extend layout.blade.php:

@extends('layout') ensures that the layout.blade.php file is used as the base template, which includes the header and footer.
Dynamic Title:

@section('title', 'Team Page') dynamically sets the page title.
Content Placement:

The team content is placed inside the @section('content') block.
Separation of Styles and Scripts:

Styles (style.css) and scripts (main.js and Bootstrap) are added via @push('styles') and @push('scripts').
Removed Duplicate Header and Footer Placeholders:

id="header-placeholder" and id="footer-placeholder" were removed as the layout handles this.

 --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <div id="header-placeholder"></div>

    <section class="team-section text-center py-5">
        <div class="container">
            <h2 class="section-title">Team <span class="text-primary">Members</span></h2>
            <p class="section-description">Our enthusiastic team of industry professionals is always ready to assist you, whether you need guidance on the auction process or require assistance with any aspect of your account.</p>
            <div class="row justify-content-center">
                <!-- Team Member 1 -->
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://via.placeholder.com/200" alt="adnan" class="rounded-circle team-img">
                        <h4 style="margin-top: 10px;" class="name">Adnan Tariq</h4>
                        <p class="title">Co-Founder</p>
                        <p class="location">Pakistan</p>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://via.placeholder.com/200" alt="" class="rounded-circle team-img">
                        <h4 style="margin-top: 10px;" class="name">Ibtisam Afzal</h4>
                        <p class="title">CEO & Co-Founder</p>
                        <p class="location">Pakistan</p>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://via.placeholder.com/200" alt="Steven Gregg" class="rounded-circle team-img">
                        <h4 style="margin-top: 10px;" class="name">Mukarram Mushtaq</h4>
                        <p class="title">Managing Director</p>
                        <p class="location">Pakistan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="footer-placeholder"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html> --}}
