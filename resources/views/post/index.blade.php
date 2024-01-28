@extends('admin.admin_master')

@section('title')
    Feeds
@endsection

@section('content')
    <a class="btn btn-success" href="{{ route('post.create') }}"><i class="fas">Tambah Post</i></a>

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-database"></i> Postingan anda</h3>
            <div class="card-tools">
                <button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>


        <div class="card-body">


            @if (auth()->user()->level == 'Admin')
                
            <table class="table" id="example1">
                <thead>
                    <th>No</th>
                    <th>Content</th>
                    <th>Gambar</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->content }}</td>
                        <td><img width="150px" src="{{ asset('storage/' . $post->gambar) }}" alt=""></td>
                        <td>
                            <form action="{{ route('post.destroy', [$post->id]) }}" onsubmit="return confirm('Yakin hapus {{ $post->user->username }}?')" method="POST">
                                @csrf
                                @method("delete")
    
                                <a href="{{ route('post.edit', [$post->id])  }}" class="btn btn-warning"><i class="fa"> Edit</i></a>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button>
                                <a href="{{ route('post.show', [$post->id])  }}" class="btn btn-info"><i class="fa fa-eye"> View</i></a>
    
    
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>

            @else

            @foreach ($posts as $post)
                <div>
                    <div class="mb-3">
                        <img width="150px" src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->gambar }}">
                    </div>
                    
                    <div class="mb-3">
                        {{ $post->content }}
                    </div>

                    <div>
                        <form action="{{ route('post.destroy', $post->id) }}" onsubmit="return confirm('Yakin hapus ?')" method="POST">
                            @csrf
                            @method("delete")

                            <a href="{{ route('post.edit', [$post->id])  }}" class="btn btn-warning"><i class="fa"> Edit</i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></button>
                            <a href="{{ route('post.show', [$post->id])  }}" class="btn btn-info"><i class="fa fa-eye"> View</i></a>


                        </form>
                    </div>
                </div>
            
            @endforeach
                
            @endif
            

        </div>

    </div>
@endsection
