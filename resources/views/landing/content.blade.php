@extends('landing.landing_master')

@section('title')
    TwiThread | Postingan
@endsection

@section('content')
    <div class="container-xxl position-relative p-0" id="home">

        <div class="container-xxl bg-primary hero-header" style="padding-bottom:60vh">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">TwiThread | Postingan</h1>
                        <p class="text-white pb-3 animated slideInDown">TwiThread adalah platform media sosial yang
                            dikembangkan oleh anak bangsa untuk bersaing dengan aplikasi-aplikasi serupa yang berada di
                            kancah internasional</p>
                        @guest
                            <a href="{{ route('login') }}"
                                class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Login</a>

                        @endguest
                        <a href="#content"
                            class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Lihat
                            Post</a>
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

    <div class="container-xxl py-5" id="content">
        <div class="container py-5 px-lg-5">

            @foreach ($datas as $data)
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="profil">
                                    @if ($data->user->profile_picture)
                                        <img width="50px" class="user"
                                            src="{{ asset('storage/' . $data->user->profile_picture) }}"
                                            alt="{{ $data->user->username }}">
                                    @else
                                        <img width="5px" class="user"
                                            src="{{ asset('storage/profil/default_avatar.jfif') }}"
                                            alt="{{ 'Guest' }}">
                                    @endif
                                    <p>{{ $data->user->username }}</p>
                                    <p>{{ $data->user->created_at->diffForHumans() }}</p>
                                </div>
                            </div>

                            <div class="col-md-10">
                                <div class="content mb-3">
                                    {{ $data->content }}
                                </div>
                                <div class="gambar mb-3">
                                    @if ($data->gambar)
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="{{ asset('storage/' . $data->gambar) }}" class="glightbox">
                                                    <img class="rounded " style="width: 75%"
                                                        src="{{ asset('storage/' . $data->gambar) }}"
                                                        alt="{{ $data->gambar }}">
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="komen">
                                    <strong class="center">Komentar</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        
                                        @auth
                                        @if (auth()->user()->profile_picture)
                                            <img class="user"
                                                src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->profile_picture) }}"
                                                alt="">
                                        @else
                                            <img width="5px" class="user"
                                                src="{{ asset('storage/profil/default_avatar.jfif') }}"
                                                alt="{{ 'Guest' }}">
                                        @endif
                                        @endauth
                                        

                                       
                                    </div>
                                    <div class="col-md-10">
                                        @auth
                                        <form action="{{ route('comment.store') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="post_id" value="{{ $data->id }}">

                                            <div class="form-floating mb-3">
                                                <input type="text" name="comment" class="form-control" id="comment"
                                                    placeholder=".">
                                                <label for="comment">Comment</label>
                                            </div>
                                            <button type="submit" class="btn btn-success mb-3">Comment!</button>
                                        </form>
                                        
                                        
                                        @endauth
                                    </div>
                                </div>
                                <div class="komentar mb-3 row">
                                    @foreach ($data->comment as $comment)
                                        <div class="col-md-2 profil">
                                            @if ($comment->user->profile_picture)
                                                <img width="50px" class="user"
                                                    src="{{ asset('storage/' . $comment->user->profile_picture) }}"
                                                    alt="{{ $comment->user->username }}">
                                            @else
                                                <img width="5px" class="user"
                                                    src="{{ asset('storage/profil/default_avatar.jfif') }}"
                                                    alt="{{ 'Guest' }}">
                                            @endif
                                            <p>{{ $comment->user->username }}</p>
                                            <p>{{ $comment->created_at->diffForHumans() }}</p>
                                        </div>

                                        <div class="col-md-8 komen">
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                        <div class="col-md-2 apus">
                                            @auth
                                            @if ($comment->user_id == auth()->user()->id || auth()->user()->level == 'Admin')
                                                <form action="{{ route('comment.destroy', [$comment->id]) }}"
                                                    onsubmit="return confirm('Yakin hapus komen dari {{ $comment->user->username }}?')"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button>

                                                </form>
                                                <a href="{{ route('comment.edit', [$comment->id]) }}"
                                                    class="btn btn-warning"><i class="fas fa-pencil-square-o ">Edit</i></a>
                                            @endif
                                                
                                            @endauth
                                        </div>
                                        <hr>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <!-- About End -->
@endsection
