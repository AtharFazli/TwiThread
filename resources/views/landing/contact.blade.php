@extends('landing.landing_master')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container-xxl position-relative p-0" id="home">

        <div class="container-xxl bg-primary hero-header" style="padding-bottom:60vh">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">TwiThread | Contact</h1>
                        <p class="text-white pb-3 animated slideInDown">TwiThread adalah platform media sosial yang
                            dikembangkan oleh anak bangsa untuk bersaing dengan aplikasi-aplikasi serupa yang berada di
                            kancah internasional</p>
                        @guest
                            <a href="{{ route('login') }}"
                                class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Login</a>

                        @endguest
                        <a href="#contact"
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

    <!-- Contact Start -->
    <div class="container-xxl py-5" id="contact">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Contact Us</h5>
                <h1 class="mb-5">Get In Touch!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">Suara klien akan sangat membantu meningkatkan pengalaman anda dalam
                            bersosial media dengan kami, <b>BERI TAHU KAMI YA!</b></p>
                        <div class="alert my-alert alert-success d-none" role="alert">
                            Pesan <b>Berhasil</b> Dikirim !
                        </div>
                        <form name="twithread-contact">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject" class="form-control" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary-gradient btn-kirim rounded-pill py-3 px-5"
                                        type="submit">Kirim Pesan</button>

                                    <button class="d-none btn btn-primary-gradient btn-loading rounded-pill py-3 px-5"
                                        type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                        <span role="status">Mengirim...</span>
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbw6tmettrRNDzr_jU9a_nUK1w_hGpIeMUvJhpSOdr0IsWrAbRoLHbk8tyE1Ojiqg1nE/exec'

        const form = document.forms['twithread-contact'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault()
            // Ketika submit diklik
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    myAlert.classList.toggle('d-none');
                    
                    form.reset();
                    console.log('Success!', response);
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
@endsection
