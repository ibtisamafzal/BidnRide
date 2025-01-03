@extends('layout')

@section('title', 'Team | Bid & Ride')

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
                    <img src="/assets/images/adnan.jpg" alt="Adnan Tariq" class="rounded-circle team-img">
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
