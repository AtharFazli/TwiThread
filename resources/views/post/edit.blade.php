@extends('admin.admin_master')

@section('title')
    Edit Post
@endsection

@section('content')

<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-database"></i> Edit</h3>
        <div class="card-tools">
            <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>


    <div class="card-body">
        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            @method('patch')

            <div class="form-floating mb-3">
                <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $post->content }}</textarea>
                <label for="floatingTextarea2">Apa yang sedang kamu pikirkan?</label>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Tambahkan foto</label>
                <input class="form-control" name="gambar" type="file" id="formFileMultiple" multiple>
            </div>

            <div>
                <img src="{{ asset('storage/' . $post->gambar) }}" alt="">
            </div>

            <button type="submit" class="btn btn-success"><i class="fa">Edit</i></button>
        </form>


    </div>

    </div>

@endsection