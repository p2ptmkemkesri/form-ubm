@extends('admin.admin_master');

@section('title')
    Tambah Provinsi
@endsection

@section('content')
    <!-- Main content -->
    <section class="container p-4">
        <div class="card">
            <div class="card-header p-2  bg-light">
                <h4 class="text-center">Tambah Provinsi</h4>
            </div><!-- /.card-header -->
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('store.provinsi') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="kode_prov" class="col-sm-2 col-form-label">Kode Provinsi</label>
                        <div class="col-sm-10">
                            <input type="text" name="kode_prov" class="form-control" id="kode_prov"
                                placeholder="Kode Provinsi">
                            @error('kode_prov')
                                <span class="danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_prov" class="col-sm-2 col-form-label">Nama Provinsi</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_prov" class="form-control" id="nama_prov"
                                placeholder="Nama Provinsi">
                            @error('nama_prov')
                                <span class="danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
@endsection
