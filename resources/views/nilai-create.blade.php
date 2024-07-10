@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Nilai Alternatif dan Kriteria</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Tambah Data Nilai Alternatif dan Kriteria</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('admin.nilai.storage-nilai') }}" method="POST">
          @csrf <!-- untuk keamanan sistem -->
          <div class="row">
            <!-- kolom kiri -->
            <div class="col-md-6">
              <!-- elemen form umum -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data Nilai Alternatif dan Kriteria</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                  {{-- <div class="form-group">
                    <label for="exampleInputNama1">Id-Alternatif</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan ID Alternatif">
                    @error('id-alternatif')
                    <small>{{$message}}</small>
                    @enderror
                  </div>  --}}

                   <!-- form start -->
                
                   <div class="form-group">
                    <label for="exampleInputNama1">Nama_alternatif</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan Nama Alternatif">
                    @error('nama_alternatif')
                    <small>{{$message}}</small>
                    @enderror
                  </div> 
                  
                  <!-- form start -->
                
                    <div class="form-group">
                      <label for="exampleInputNama1">C1 - Jumlah Balita Yang Terindikasi Stunting</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan Nilai C1">
                      @error('c1')
                      <small>{{$message}}</small>
                      @enderror
                    </div> 

                    <!-- form start -->
                
                    <div class="form-group">
                      <label for="exampleInputNama1">C2 - Jumlah Keluarga dengan Tingkat Ekonomi Rendah</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan nilai C2">
                      @error('c2')
                      <small>{{$message}}</small>
                      @enderror
                    </div> 

                    <div class="form-group">
                        <label for="exampleInputNama1">C3 - Jumlah Balita yang Menerima Imunisasi Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan nilai C3">
                        @error('c3')
                        <small>{{$message}}</small>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label for="exampleInputNama1">C4 - Jumlah Fasilitas Kesehatan</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan nilai C4">
                        @error('c4')
                        <small>{{$message}}</small>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label for="exampleInputNama1">C5 - Jumlah Anak yang Mengalami Malnutrisi</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan nilai C5">
                        @error('c5')
                        <small>{{$message}}</small>
                        @enderror
                      </div> 

                  
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
