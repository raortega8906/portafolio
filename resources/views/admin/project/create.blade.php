@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ url('/project') }}">Proyecto</a></li>
                            <li class="breadcrumb-item active">Crear</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <a class="btn btn-success btn-sm mb-3 ml-3" href="{{ route('project.index') }}">
            <i class="fas fa-folder"></i>
            Proyectos
        </a>

        <div class="col-md-12">

        @include('admin.partials.session-flash-status')

        <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Proyecto</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form role="form" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="url_clean">Url</label>
                            <input type="text" class="form-control" name="url_clean" id="url_clean"
                                   placeholder="Enter url">
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label for="content">Contenido</label>
                            <textarea type="text" class="form-control" name="content" id="content" rows="4"
                                      placeholder="Enter content"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.content-wrapper -->

@endsection
