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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card mt-3 shadow-lg">
                    <div class="card-header">
                        <h1 class="titulo">Subir Video</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-container">
                            <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="content">
                                    <div class="box">
                                        <input type="file" name="video" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-5">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                                </svg>
                                            </figure> 
                                            <span>Subir video&hellip;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Titulo" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="Descripcion" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" id="submit-all">Subir video</button>
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
    <script src="/js/custom-file-input.js"></script>
</body>
</html>
