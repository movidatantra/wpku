@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Nilai Alternatif dan Kriteria</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Edit Nilai Alternatif dan Kriteria</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('admin.nilai.nilai-update',['id' => $data->id]) }}" method="POST">
          @csrf <!-- untuk keamanan sistem -->
          @method('PUT') <!-- untuk update data -->
          <div class="row">
            <!-- kolom kiri -->
            <div class="col-md-6">
              <!-- elemen form umum -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Nilai Alternatif dan Kriteria</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="alt_id">ID Alternatif</label>
                    <input type="text" name="alt_id" class="form-control" id="alt_id" value="{{ $data->alt_id }}" placeholder="Masukkan ID Alternatif">
                    @error('alt_id')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="c1">C1</label>
                    <input type="text" name="c1" class="form-control" id="c1" value="{{ $data->c1 }}" placeholder="Masukkan nilai C1">
                    @error('c1')
                    <small>{{$message}}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="c2">C2</label>
                    <input type="text" name="c2" class="form-control" id="c2" value="{{ $data->c2 }}" placeholder="Masukkan nilai C2">
                    @error('c2')
                    <small>{{$message}}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="c3">C3</label>
                    <input type="text" name="c3" class="form-control" id="c3" value="{{ $data->c3 }}" placeholder="Masukkan nilai C3">
                    @error('c3')
                    <small>{{$message}}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="c4">C4</label>
                    <input type="text" name="c4" class="form-control" id="c4" value="{{ $data->c4 }}" placeholder="Masukkan nilai C4">
                    @error('c4')
                    <small>{{$message}}</small>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="c5">C5</label>
                    <input type="text" name="c5" class="form-control" id="c5" value="{{ $data->c5 }}" placeholder="Masukkan nilai C5">
                    @error('c5')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (kiri) -->
          </div>
          <!-- /.row -->
        </form>
        <!-- /.container-fluid -->
    </section>
    <!-- Konten utama -->
  </div>
@endsection
