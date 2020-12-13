<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/component.css" />
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form action="{{ route('video.update', $video->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card shadow-lg">
                <div class="card-header">
                    <h4>Actualizar Video</h4>
                </div>
                <div class="card-body">
                    <div class="form-container">
                        <div class="content">
                            <div class="text-center">
                                <input type="file" name="video" id="file-5" class="inputfile inputfile-4"/>
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
                                value="{{ $video->name }}"
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
                            >{{ $video->description }}</textarea>
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
                        <img src="/img/close.png" alt="">
                        CANCELAR
                    </a>
                    <button type="submit" class="btn btn-warning" id="submit-all">
                        <img src="/img/refresh.png" alt="">
                        ACTUALIZAR
                    </button>
                </div>
            </div>
        </form>
        <div class="col-md-3"></div>
    </div>
</x-slot>
<script src="/js/custom-file-input.js"></script>
</x-app-layout>
