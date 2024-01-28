@extends('admin.admin_master')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                @method('patch')
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NIS</label>
                    <input type="number" value="{{ $laporan->nis }}" name="nis"
                        class="form-control @error('nis') is-invalid @enderror" id="exampleFormControlInput1"
                        placeholder="">
                    @error('nis')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" value="{{ $laporan->nama_pelapor }}" name="nama_pelapor"
                        class="form-control @error('nama_pelapor') is-invalid @enderror" id="exampleFormControlInput1"
                        placeholder="">
                    @error('nama_pelapor')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <input type="text" value="{{ $laporan->kelas }}" name="kelas"
                        class="form-control @error('kelas') is-invalid @enderror" id="exampleFormControlInput1"
                        placeholder="">
                    @error('kelas')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Laporan Mu</label>
                    <textarea class="form-control @error('isi_laporan') is-invalid @enderror" name="isi_laporan"
                        id="exampleFormControlTextarea1" rows="3">{{ $laporan->isi_laporan }}</textarea>
                    @error('isi_laporan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa"> Edit</i></button>
            </form>




        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
