<x-app-layout>
    <br>
    <br>
    <br>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 70%">
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
            <div class="card-footer text-right">
                <a href="{{route('video.index')}}" class="btn btn-secondary">
                    <img src="/img/close.png" alt="close"/>SALIR
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
