<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 | Posts</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza tu CSS aquí -->
</head>

<body>
    <h1>Aqui se mostrara el formulario para crear un nuevo post</h1>

    {{-- Muestra los errores en una lista 
     @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif --}}

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <label>
            Título:
            <input type="text" name="tittle" value="{{ old('tittle') }}">
        </label>
        @error('tittle')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label>
            Slug:
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>
        @error('slug')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label>
            Categoría:
            <input type="text" name="category"value="{{ old('category') }}">
        </label>
        @error('category')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label>
            Contenido:
            <textarea name="content">{{ old('content') }}</textarea>
        </label>
        @error('content')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <button type="submit">
            Crear Post
        </button>
    </form>
</body>

</html>
