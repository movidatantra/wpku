@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kriteria</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Edit Data Kriteria</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('admin.kriteria.kriteria-update',['id'=>$data->id]) }}" method="POST">
          @csrf <!-- untuk keamanan sistem -->
          @method('PUT')
          <div class="row">
            <!-- kolom kiri -->
            <div class="col-md-6">
              <!-- elemen form umum -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Data Kriteria</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama Kota/Kabupaten</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1"value=" {{ $data->nama_kota }}" placeholder="Masukkan nama">
                    @error('nama_kota')
                    <small>{{$message}}</small>
                    @enderror
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputLabel">Label</label>
                    <select name="label" class="form-control" id="exampleInputLabel">
                        <option value="">Pilih Label</option>
                        <option value="cost" {{ old('label') == 'cost' ? 'selected' : '' }}>Cost</option>
                        <option value="benefit" {{ old('label') == 'benefit' ? 'selected' : '' }}>Benefit</option>
                    </select>
                    @error('label')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
              
              <div class="form-group">
                <label for="exampleInputNama1">Bobot</label>
                <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan bobot">
                @error('bobot')
                <small>{{$message}}</small>
                @enderror
              </div>

              <div class="form-group">
                <label for="exampleInputNama1">Flag</label>
                <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan Flag">
                @error('flag')
                <small>{{$message}}</small>
                @enderror
              </div>
            </div>            

                  
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
