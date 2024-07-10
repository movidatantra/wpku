
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
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Nilai Alternatif dan Kriteria</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.nilai.nilai-create') }}" class="btn btn-primary mb-3"> Tambah Nilai Alternatif dan Kriteria</a>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Nilai Alternatif & Kriteria</h3>
  
                  <div class="card-tools">
                    <form action="{{ route('admin.nilai') }}" method="GET">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ $request->get('search') }}">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>  
                    </form>
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id_Alternatif</th>
                        <th>Nama_Alternatif</th>
                        <th>C1 </th>                       
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $d)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$d->alt_id}}</td>
                          <td>{{$d->nama_alternatif}}</td>
                          <td>{{$d->c1}}</td>
                          <td>{{$d->c2}}</td>                         
                          <td>{{$d->c3}}</td>
                          <td>{{$d->c4}}</td>
                          <td>{{$d->c5}}</td>
                          <td>
                            <a href="{{ route('admin.nilai.nilai-edit', ['id'=> $d->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $d->id }}"><i class="fas fa-trash-alt"></i>Delete</button>
                          </td>
                      </tr>
                      <!-- Modal -->
                      <div class="modal fade" id="modal-delete-{{ $d->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah kamu yakin ingin menghapus data ini? <b>{{ $d->id }}</b></p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('admin.nilai.nilai-delete', ['id' => $d->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection