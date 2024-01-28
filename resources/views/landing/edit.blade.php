@extends('landing.landing_master')

@section('title')
    Twithread | Edit Komen
@endsection

@section('content')

<div class="container-xxl py-5" id="content">
    <div class="container py-5 px-lg-5">
        <div class="card card-success">
            <h5 class="card-header">Edit komen</h5>
            <div class="card-body">
                <form action="{{ route('comment.update', $comment->id) }}" method="post">
                @csrf
                @method('patch')
        
                <div class="form-floating mb-3">
                    <input type="text" name="comment" value="{{ $comment->comment }}" class="form-control" id="comment"
                        placeholder=".">
                    <label for="comment">Comment</label>
                </div>
        
                <button type="submit" class="btn btn-success">Edit</button>
            </form>
              
            </div>
          </div>

          </div>
          </div>

@endsection