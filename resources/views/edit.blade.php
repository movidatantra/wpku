@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('admin.user.update',['id' => $data->id]) }}" method="POST">
          @csrf <!-- untuk keamanan sistem -->
          @method('PUT') <!-- untuk update data -->
          <div class="row">
            <!-- kolom kiri -->
            <div class="col-md-6">
              <!-- elemen form umum -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $data->email }}" placeholder="Masukkan email">
                    @error('email')
                    <small>{{$message}}</small>
                    @enderror
                  </div>                

                  <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" value="{{ $data->name }}" placeholder="Masukkan nama">
                    @error('nama')
                    <small>{{$message}}</small>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kata sandi">
                    @error('password')
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
