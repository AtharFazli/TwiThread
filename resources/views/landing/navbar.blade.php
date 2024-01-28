<!-- Navbar & Hero Start -->

<div class="container-xxl position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ url("") }}" class="navbar-brand p-0">
            <h1 class="m-0">TwiThread</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link
                {{ request()->url('/') ? 'active' : '' }}
                ">Home</a>
                <a href="{{ route('content.index') }}" class="nav-item nav-link  {{ request()->routeis('content.index') ? 'active' : '' }}">Content</a>
                <a href="{{ route('contact.create') }}" class="nav-item nav-link {{ request()->routeis('contact.create') ? 'active' : '' }}">Contact</a>
                <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
            </div>
            @auth
            <a href="{{ route("dashboard") }}" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3">{{ auth()->user()->username }}</a>

            @else
            <a href="{{ route("login") }}" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
            @endauth

        </div>
    </nav>