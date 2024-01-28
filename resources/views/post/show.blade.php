@extends('admin.admin_master')

@section('title')
    Show
@endsection

@section('content')


    <a class="btn btn-danger mb-3" href="{{ route('post.index') }}">Kembali</a>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-database"></i> Detail</h3>

        <div class="card-tools">
            <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>


    <div class="card-body">
    
        <div class="mb-3">
            <h4>Konten</h4>
            {{ $post->content }}
        </div>
        @if ($post->gambar)
        <div class="mb-3">
            <img width="150px" src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->user->username, 'post' }}">
        </div>
            
        @endif
        <div class="mb-3">
            <h4>Diupload pada</h4>
            {{ $post->created_at }}
        </div>

    </div>
</div>





    
@endsection