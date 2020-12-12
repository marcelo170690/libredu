<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/normalize.css" />
	<link rel="stylesheet" href="/css/demo.css" />
	<link rel="stylesheet" href="/css/component.css" />
    <title>Libredu</title>
    <script>
		(function(e,t,n){
			var r=e.querySelectorAll("html")[0];
			r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")
        })
		(document,window,0);
	</script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="card mt-3 shadow-lg">
                <div class="card-header">
                    <h1>Eliminar video</h1>
                </div>
                <div class="card-body">
                    <div class="form-container">
                        <form action="{{ route('video.destroy',$video->id) }}" method="post" enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <div class="form'group">
                                <div class="text-center">
                                    <img src="/img/warning.png">
                                </div>
                                <h2>¿Esta seguro que desea<br> eliminar permanentemente <br> el siguiente video?</h2>
                                <h5>Advertencia: Si elimina el video no podra recuperalo</h5>
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ $video->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" disabled>{{ $video->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block" id="submit-all">Eliminar video</button>
                                <a href="{{route('video.index')}}" class="btn btn-secondary btn-block">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-right">
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="js/custom-file-input.js"></script>
</body>
</html>
