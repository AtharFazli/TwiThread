@extends('admin.admin_master')

@section('title')
  Index
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
          <div class="small-box bg-info">
              <div class="inner">
                <h3>Post</h3>

                <p>New Post</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route("post.create") }}" class="small-box-footer">Post <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection