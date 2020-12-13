<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/component.css" />
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow-lg">
                        <div class="card-header">
                            <h4 class="titulo">{{ $video->name }}</b></h4>
                            <p class="text-muted">{{ $video->description }}</p>
                        </div>
                        <div class="card-body">
                            <div class="form-container">
                                <div class="content">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $video->url }}" allowfullscreen></iframe>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{route('video.index')}}" class="btn btn-secondary">
                                <img src="/img/close.png" alt="close"/>
                                SALIR
                            </a>
                        </div>
                    </div>
                </form>
            <div class="col-md-3"></div>
        </div>
    </x-slot>
    <script src="/js/custom-file-input.js"></script>
</x-app-layout>
