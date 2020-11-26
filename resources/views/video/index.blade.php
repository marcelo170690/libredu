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
        @foreach($videos as $video)
            <li>{{$video->name}}</li>
        @endforeach

        <a href="{{route('video.create')}}" class="btn btn-secondary">
            Volver
        </a>
   </div>
</body>
</html>
