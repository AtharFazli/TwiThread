@extends('landing.landing_master')

@section('title')
    TwiThread
@endsection

@section('content')
    <div class="container-xxl position-relative p-0" id="home">

        <div class="container-xxl bg-primary hero-header" style="padding-bottom:60vh">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">TwiThread</h1>
                        <p class="text-white pb-3 animated slideInDown">TwiThread adalah platform media sosial yang
                            dikembangkan oleh anak bangsa untuk bersaing dengan aplikasi-aplikasi serupa yang berada di
                            kancah internasional</p>
                            @guest
                            <a href="{{ route('login') }}"
                                class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Login</a>
                                
                            @endguest
                        <a href="{{ route('contact.create') }}"
                            class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Contact
                            Us</a>
                    </div>
                    <div x class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp"
                        data-wow-delay="0.3s">
                        <img width="100%" src="{{ asset('/landing/img/landing-hp.png') }}">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">About App</h5>
                    <h1 class="mb-4">#Twithtread For Us</h1>
                    <p class="mb-4">
                        TwiThread adalah platform media sosial yang
                        dikembangkan oleh anak bangsa untuk bersaing dengan aplikasi-aplikasi serupa yang berada di
                        kancah internasional
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <i class="fa fa-cogs fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                                <div class="ms-3">
                                    <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                    <p class="text-primary-gradient mb-0">Active Install</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <i class="fa fa-comments fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                <div class="ms-3">
                                    <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                    <p class="text-secondary-gradient mb-0">Clients Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('content.index') }}"
                        class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Lihat</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">How It Works</h5>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-cog fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Make Your Account</h5>
                        <p class="mb-0">Buat akun untuk memulai sesuatu yang luar biasa</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-address-card fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Setup Your Profile</h5>
                        <p class="mb-0">Atur profil anda agar dikenal dari seluruh internet</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Enjoy The Features</h5>
                        <p class="mb-0">Nikmati fitur-fitur yang te</p>lah kami sediakan untuk pengalaman anda yang maksimal
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->
@endsection
