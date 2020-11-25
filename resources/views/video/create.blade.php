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
                    <form action="#" class="dropzone" id="my-dropzone">
                        <div class="dz-message">
                            <div class="icon">
                                <img src="/img/upload.png" style="width: 80px; height: 80px;">
                            </div>
                            <h3>Arrastra tus videos aqui</h3>
                        </div>
                    </form>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Titulo" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Descripcion" ></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block" id="submit-all">Subir video</button>
                        <button type="button" class="btn btn-secondary btn-block" id="submit-all">Cancelar</button>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
            </div>
        </div>
    </div>
    <script src="/js/dropzone.js"></script>
    <script src="/js/midropzone.js"></script>
    <script>
        Dropzone.options.FormUploadFile = {
            acceptedFiles:"video/*"
        }
    </script>
</body>
</html>
