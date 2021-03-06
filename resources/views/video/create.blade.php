<x-app-layout>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/component.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    {{-- <x-slot name="header">

    </x-slot> --}}
    <br>
    <br>
    <div class="d-flex justify-content-center">
        <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data" style="width: 600px;">
            @csrf
            <div class="card shadow-lg">
                <div class="card-header">
                    <h4 class="titulo">Subir video en <b>CBNedu</b></h4>
                </div>
                <div class="card-body">
                    <div class="form-container">
                        <div class="content">
                            <div class="text-center">
                                <input type="file" name="video" id="file-5" class="inputfile inputfile-4" accept="video/*" required/>
                                <label for="file-5">
                                    <figure >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                        </svg>
                                    </figure>
                                    <span>Subir video&hellip;</span>
                                </label>
                                @error('video')
                                    <small id="file-5" class="form-text text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="name"
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Titulo"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <small id="name" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea
                                class="form-control
                                @error('title') is-invalid @enderror"
                                name="description"
                                placeholder="Descripcion"
                                id="description"
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <small id="description" class="form-text text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{route('video.index')}}" class="btn btn-secondary">
                        <img src="/img/close.png" alt="close"/>
                        SALIR
                    </a>
                    <button type="submit" class="btn btn-success" id="submit-all" data-toggle="modal" data-target="#loading" disabled>
                        <img src="/img/save.png" alt="save"/>
                        AGREGAR
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script src="/js/custom-file-input.js"></script>
    <script src="/js/validate_input.js"></script>
</x-app-layout>
  <!-- The Modal -->
<div class="modal" id="loading">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body d-flex align-items-center">
                <strong>Guardando video. Por favor espere...</strong>
                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</div>
