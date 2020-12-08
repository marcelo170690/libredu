<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
   <div class="container">
        
        <table class="table">
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
                @foreach($videos as $video)
                <tr>
                    <td>{{$video->loop + 1}}</td>
                    <td>{{$video->name}}</td>
                    <td>{{$video->description}}</td>
                    <td>{{$video->created_at}}</td>
                    <td>
                        <form action="{{ route('video.destroy',$video->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{route('video.create')}}" class="btn btn-secondary">
            Volver
        </a>
   </div>
</body>
</html>
