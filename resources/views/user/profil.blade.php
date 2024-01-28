@extends('admin.admin_master')

@section('title')
    Profil
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            
            @if (auth()->user()->profile_picture)
                <img class="user" src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->profile_picture) }}"
                    alt="">

                    @else

                    <img class="user" src="{{ asset('storage/profil/default_avatar.jfif') }}"
                    alt="">
            @endif
            
            <form action="{{ route('profil.update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                {{-- PATCH untuk beberapa data saja --}}
        
                <div class="mb-3">
                    <label for="formFile" class="form-label">Ganti Foto</label>
                    <input class="form-control" type="file" id="formFile" name="profile_picture">
                </div>

                <table>
                    <tr>
                        <td>
                            <button class="btn btn-success" type="submit"><i class="fas fa"> Submit</i></button>
                        </form>
                        </td>

                        <td>
                            <form action="{{ route('profil.destroy', auth()->user()->id) }}" method="post">
                                @csrf
                            @method('delete')
                
                            <button type="submit" class="btn btn-danger"><i class="fas"> Hapus</i></button>
                            </form>

                        </td>
                    </tr>
                </table>
        
                <a href="{{ route('user.edit', [auth()->user()->id])  }}" class="btn btn-warning"><i class="fa"> Edit</i></a>

        </div>
    </div>


@endsection
