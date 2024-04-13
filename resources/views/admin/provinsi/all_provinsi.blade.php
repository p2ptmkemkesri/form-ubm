@extends('admin.admin_master')

@section('title')
    Semua Provinsi
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Kode Provinsi</th>
                                        <th>Nama Provinsi</th>
                                        <th>Aksi</th>
                                </thead>

                                <tbody>
                                    @foreach ($provinces as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> {{ $item->kode_prov }} </td>
                                            <td> {{ $item->nama_prov }} </td>

                                            <td>
                                                <a href="{{ route('edit.provinsi', $item->id) }}" class="btn btn-info sm"
                                                    title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                                <a href="{{ route('delete.provinsi', $item->id) }}"
                                                    class="btn btn-danger sm" onclick="return confirm('Are you sure?')"
                                                    title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <a href="{{ route('add.provinsi') }}" class="btn btn-info mb-3">Tambah Provinsi</a>

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
