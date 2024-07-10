@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil Perhitungan WP</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Perhitungan WP</li>
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
                    <button class="btn btn-primary mb-3" onclick="printPage()">Print</button>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ranking Alternatif</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Alternative</th>
                                        <th>S Value</th>
                                        <th>V Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rankedAlternatives as $alternative)
                                        <tr>
                                            <td>{{ $alternative['nama'] }}</td>
                                            <td>{{ number_format($alternative['S'], 10, '.', '') }}</td>
                                            <td>{{ number_format($alternative['V'], 10, '.', '') }}</td>
                                        </tr>
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

<script>
function printPage() {
    window.print();
}
</script>
@endsection
