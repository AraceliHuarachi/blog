<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>

</head>
<body>
       <h1>Titulo: {{$post->tittle}} </h1>
       <a href="{{route ('posts.edit', $post)}}">
        Editar post
    </a>
    <p>
        <b>Categoria:</b> {{$post->category}}
    </p>

    <p>
        {{$post->content}}
    </p>
    <br>
    <br>
  
    <a href="{{route('posts.index')}}"><- Volver a la lista de posts</a>
    <br>

    <form action="{{route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar este post
        </button>
    </form>
</body>
</html>