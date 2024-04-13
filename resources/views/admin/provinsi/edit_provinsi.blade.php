@extends('admin.admin_master');

@section('title')
    Edit Provinsi
@endsection

@section('content')
    <!-- Main content -->
    <section class="container p-4">
        <div class="card">
            <div class="card-header p-2  bg-light">
                <h4 class="text-center">Edit Kategori</h4>
            </div><!-- /.card-header -->
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('update.provinsi', $blogcategory->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputCategory" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="category_name" class="form-control" id="inputCategory"
                                value="{{ $blogcategory->category_name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Update Kategori</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
@endsection
