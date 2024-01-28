@extends('admin.admin_master')

@section('title')
    Create
@endsection

@section('content')
    <a class="btn btn-success mb-3" href="{{ route('user.index') }}">Kembali</a>

    @include('alert.error')

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-database"></i> Tambah</h3>
            <div class="card-tools">
                <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>


        <div class="card-body">

            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"
                            name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Username" value="{{ old('username') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter Password" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 label-control"">Level</label>
                        <select class="form-select" name="level" aria-label="Default select example">
                            <option value="">Select Level</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
        </div>
        </form>
    </div>
@endsection
