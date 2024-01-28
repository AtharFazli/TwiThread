@extends('admin.admin_master')

@section('title')
    Post
@endsection

@section('content')

@include('alert.error')


<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-database"></i> Tambah</h3>
        <div class="card-tools">
            <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>


    <div class="card-body">
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data"> 
            @csrf

            <div class="form-floating mb-3">
                <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Apa yang sedang kamu pikirkan?</label>
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Tambahkan foto</label>
                <input class="form-control" name="gambar[]" type="file" id="formFileMultiple" multiple>
            </div>

            <button type="submit" class="btn btn-success"><i class="fa">Post</i></button>
        </form>


    </div>

    </div>

@endsection