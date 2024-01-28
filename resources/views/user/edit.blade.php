@extends('admin.admin_master')

@section('title')
    Edit Data
@endsection

@section('content')
    <a class="btn btn-success" href="{{ route('user.index') }}">Kembali</a>

    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-database"></i> Tambah</h3>
            <div class="card-tools">
                <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>


        <div class="card-body">

            <form action="{{ route('user.update', $user->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Name"
                            name="name" value="{{ $user->name }}">

                            @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="exampleInputPassword1"
                            placeholder="Enter Username" value="{{ $user->username }}">

                            @error('username')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputPassword1"
                            placeholder="Enter Email" value="{{ $user->email }}">

                            @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1"
                            placeholder="Enter Password" value="">

                            @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div> --}}

                    @if (auth()->user()->level == 'Admin')
                        
                    <div class="form-group">
                        <label class="col-sm-2 label-control"">Level</label>
                        <select class="form-select @error('level') is-invalid @enderror" name="level" aria-label="Default select example">
                            <option>Select Level</option>
                            <option value="Admin" {{ $user->level === 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="User" {{ $user->level === 'User' ? 'selected' : '' }}>User</option>
                        </select>

                        @error('level')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    @endif

                </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
        </div>
        </form>
    </div>
@endsection
