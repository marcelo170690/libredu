<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card mt-6 shadow-lg">
                    <div class="card-header">
                        <h1>Lista de videos</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha de subida</th>
                                <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $cont => $video)
                                <tr>
                                    <td>{{$cont+1}}</td>
                                    <td>{{$video->name}}</td>
                                    <td>{{$video->description}}</td>
                                    <td>{{$video->created_at}}</td>
                                    <td>
                                        <a href="{{ route('video.edit',$video->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="{{ route('video.show',$video->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{route('video.create')}}" class="btn btn-secondary">Subir Video</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>
