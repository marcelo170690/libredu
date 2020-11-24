<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="/css/dropzone.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Crear Video</title>
</head>
<body>
    <div class="container">
        <div class="card mt-3 shadow-lg">
            <div class="card-header">
                Nuevo Video
            </div>
            <div class="card-body">
                <div class="form-container">
                    <form class="dropzone" id="FormUploadFile" action="#" method="POST">
                        <div class="dz-message">
                            <div class="icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <h2>Arrastra tus videos aqui</h2>
                        </div>
                    </form>
                    
                    <form action="" method="POST">
                    <div class="input-group">
                        <input type="text" name="video" class="form-control" placeholder="Título" required>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="archivo"></label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Subir Video</button>
                    <button type="button" class="btn btn-secondary btn-lg btn-block">Cancelar</button>
                    </form>
                </div>
            </div>
            <div class="card-footer text-right">
            </div>
        </div>
    </div>
    <script src="/js/dropzone.js"></script>
</body>
</html>
