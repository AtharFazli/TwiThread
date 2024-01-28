@extends('admin.admin_master')


@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tweet</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>NAMA PELAPOR</th>
                        <th>KELAS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->nama_pelapor }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>
                                <form action="{{ route('laporan.destroy' , $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-3"><i class="fa"> Hapus</i></button>
                                </form>
                                <form action="{{ route('laporan.edit' , $item->id) }}" method="GET">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-warning"><i class="fa"> Edit</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
