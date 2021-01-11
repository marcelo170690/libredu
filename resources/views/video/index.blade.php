<x-app-layout>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <br>
    <div class="d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card mt-6 shadow-lg">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>Videos en <b>CBN</b>edu </h3>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show text-center tiempo-alert" role="alert">
                                <h5><strong>{{ session('status') }}</strong></h5>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <script type="text/javascript">
                                $(".tiempo-alert").delay(5000).slideUp(200, function () {
                                    $(this).alert('close');
                                });
                            </script>
                        @endif
                        <a href="{{route('video.create')}}" class="btn btn-success">
                            <img src="/img/upload.png" alt="subir video">
                            Subir Video
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha de subida</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $cont => $video)
                        <tr>
                        <td>{{ $cont + 1 }}</td>
                        <td>{{ $video->name }}</td>
                        <td>{{ $video->description }}</td>
                        <td>{{ $video->created_at }}</td>
                        <td>
                            <form action="{{ route('video.destroy', $video->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="btn-group">
                                    <a href="{{ route('video.show', $video->id) }}" class="btn btn-outline-primary">Ver</a>
                                    <a href="{{ route('video.edit', $video->id) }}" class="btn btn-outline-primary">Editar</a>
                                    <button
                                        type="submit"
                                        class="btn btn-outline-primary"
                                        onclick="return confirm('Esta eliminando un video, con el podría eliminar todo el historial respecto a este video, ¿Está seguro?')">
                                        Quitar
                                    </button>
                                </div>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
