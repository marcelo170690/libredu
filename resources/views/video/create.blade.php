<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
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
                        <input type="text" name="video" class="form-control" placeholder="Título">
                    </div>
                </form>
            </div>
            <div class="card-footer text-right">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="button" class="btn btn-success">Subir Video</button>
            </div>
        </div>
    </div>
</body>
</html>
