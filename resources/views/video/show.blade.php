<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrar Videos') }}
        </h2>
    </x-slot>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="card text-white bg-secondary mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <div class="card-header">
                                        <h4 class="titulo">{{ $video->name }}</b></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $video->description }}</p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="content">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{ Storage::url($video->url) }}" allowfullscreen autoplay></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{route('video.index')}}" class="btn btn-secondary">
                            <img src="/img/close.png" alt="close"/>SALIR
                        </a>
                    </div>
                </div>
            </form>
        <div class="col-md-1"></div>
    </div>
</x-app-layout>
