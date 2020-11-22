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
        <form action="" method="POST">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
        </form>
        <div class="d-flex align-items-center">
            <strong>Subiendo video...</strong>
            <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
        </div>
    </div>
</body>
</html>
