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
                            <li class="breadcrumb-item active">Proyecto</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <a class="btn btn-success btn-sm mb-3 ml-3" href="{{ url('/project/create') }}">
            <i class="fas fa-user-alt"></i>
            Crear
        </a>

        @include('admin.partials.session-flash-status')

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header border-0">
                                <h3 class="card-title">Proyectos</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Url</th>
                                            <th>Imagen</th>
                                            <th>Contenido</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->title }}</td>
                                                <td>{{ $project->url_clean }}</td>
                                                <td><img src="/images/{{ $project->image }}" width="150" /></td>
                                                <td>{{ $project->content }}</td>
                                                <td class="float-right">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary btn-sm mx-1"
                                                            href="{{ route('project.show', $project) }}">
                                                            <i class="fas fa-folder"></i>
                                                            Ver
                                                        </a>
                                                        <a class="btn btn-info btn-sm mx-1"
                                                            href="{{ route('project.edit', $project) }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Editar
                                                        </a>
                                                        <button data-toggle="modal" data-target="#deleteModal"
                                                            data-id="{{ $project->id }}" class="btn btn-danger btn-sm mx-1">
                                                            <i class="fas fa-trash"></i>
                                                            Borrar
                                                        </button>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{ $projects->links() }}

                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Seguro desea borrar el registro selecccionado?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                                            Cerrar
                                        </button>
                                        <form id="formDelete" data-action="{{ route('project.destroy', 0) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                                Borrar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <script>
        window.onload = function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                action = $('#formDelete').attr('data-action').slice(0, -
                    1) // Elimina la ultima posicion del http, en este caso el 0 pasado como parametro.
                action += id
                console.log(action)
                $('#formDelete').attr('action', action)

                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar el Usuario: ' + id)
            });
        };
    </script>

@endsection
