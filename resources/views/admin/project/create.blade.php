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

    @include('admin.partials.validation-error')
    @include('admin.partials.session-flash-status')
    

    <div class="col-md-12">
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

        @include('admin.partials.validation-error')

        <!-- form start -->
        <form role="form" action="{{ route('project.create') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
              @error('title')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="url_clean">Url</label>
              <input type="text" class="form-control" name="url_clean" id="url_clean" placeholder="Enter url">
              @error('url_clean')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="image">Imagen</label>
              <input type="file" class="form-control" name="image" id="image">
              @error('image')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="content">Contenido</label>
              <textarea type="text" class="form-control" name="content" id="content" rows="4" placeholder="Enter content"></textarea>
              @error('content')
                <small class="text-danger">{{ $message }}</small>
              @enderror
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