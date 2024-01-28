@extends('admin.admin_master')

@section('title')
    Show
@endsection

@section('content')


    <a class="btn btn-danger mb-3" href="{{ route('user.index') }}">Kembali</a>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-database"></i> Detail</h3>

        <div class="card-tools">
            <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>


    <div class="card-body">
    <table class="table table-borderless">
        <tr>
            <td>Name</td>
            <td>: {{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{ $user->email }}</td>
        </tr>
        <tr>
            <td>Level</td>
            <td>: {{ $user->level }}</td>
        </tr>
        <tr>
            <td>Time</td>
            <td>: {{ $user->created_at }}</td>
        </tr>
    </table>
    </div>
</div>





    
@endsection