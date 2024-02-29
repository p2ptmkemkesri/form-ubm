@extends('admin.admin_master')

@section('title')
    Data Provinsi
@endsection

@section('content')
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Provinsi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kode Provinsi</th>
                    <th>Nama Provinsi</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach ($provinsi as $key => $item)
                        <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{$item->kode_provinsi}} </td>
                            <td> {{$item->nama_provinsi}} </td>
                            <td> {{$item->created_at}} </td>
                            <td> {{$item->updated_at}} </td>
                        </tr>
                    @endforeach
                  </tbody>

                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection
