<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrar Videos') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card mt-6 shadow-lg">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Videos en <b>CBN</b>edu </h1>
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
                    <td>{{$cont + 1}}</td>
                    <td>{{$video->name}}</td>
                    <td>{{$video->description}}</td>
                    <td>{{$video->created_at}}</td>
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
