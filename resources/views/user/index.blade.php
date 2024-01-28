@extends('admin.admin_master')

@section('title')
    Display Data
@endsection

@section('content')


    <a class="btn btn-success mb-3" href="{{ route('user.create') }}"><i class="fa fa-plus-square"> Tambah Data</i></a>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-database"></i> Judul</h3>

        <div class="card-tools">
            <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>


    <div class="card-body">
        {{-- bang --}}
        <div class="col">
            <div class="col-md-12">
                <table class="table" id="example1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        @foreach ($data as $row)

                        {{-- + ($data->perpage() * ($data->currentPage()-1)) --}}
        
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->level }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <form action="{{ route('user.destroy', [$row->id]) }}" onsubmit="return confirm('Yakin hapus {{ $row->name }}?')" method="POST">
                                    @csrf
                                    @method("delete")
        
                <a href="{{ route('user.edit', [$row->id])  }}" class="btn btn-warning"><i class="fa"> Edit</i></a>
                                    
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button>
                                    <a href="{{ route('user.show', [$row->id])  }}" class="btn btn-info"><i class="fa fa-eye"> View</i></a>
        
        
                                </form>
                            </td>
        
                        </tr>
        
                        
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->appends(Request::all())->links() }} --}}
            </div>
        </div>
    </div>
</div>





    
@endsection