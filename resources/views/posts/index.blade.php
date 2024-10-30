<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 | Posts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Aqui se mostraran todos los Posts</h1>

    <a href="{{route('posts.create')}}">Nuevo Post</a>

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{route('posts.show',$post)}}">
                {{ $post->tittle }}
            </a>
        </li>
       
        @endforeach
    </ul>

    {{$posts->links() }}

</body>
</html>