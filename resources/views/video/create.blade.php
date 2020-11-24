<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/global.css" rel="stylesheet">
    <title>Crear Video</title>
</head>
<body>
    <div class="container">
        <div class="card mt-3 shadow-lg">
            <div class="card-header">
                Nuevo Video
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Título</span>
                        </div>
                        <input type="text" name="video" class="form-control" placeholder="Título" required>
                    </div>
                    <div class="form-group">
                        <label for="archivo"></label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Subir Video</button>
                    <button type="button" class="btn btn-secondary btn-lg btn-block">Cancelar</button>
                </form>
            </div>
            <div class="card-footer text-right">
            </div>
        </div>
    </div>
</body>
</html>
