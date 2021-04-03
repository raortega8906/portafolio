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
              <li class="breadcrumb-item active">Detalle</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Detalles del Proyecto</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                    data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"
                    data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $project->title) }}" disabled>
            </div>
            <div class="form-group">
              <label for="url_clean">Url</label>
              <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{ old('url_clean', $project->url_clean) }}" disabled>
            </div>
            <div class="form-group">
              <label for="image">Imagen</label>
              <input type="file" class="form-control" name="image" id="image" value="{{ old('image', $project->image) }}" disabled>
            </div>
            <div class="form-group">
              <label for="content">Contenido</label>
              <textarea type="text" class="form-control" name="content" id="content" rows="4" disabled>{{ old('content', $project->content) }}</textarea>
            </div>
          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.content-wrapper -->
    
@endsection