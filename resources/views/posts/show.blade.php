<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- resources/views/posts/show.blade.php -->

<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

@if($post->images->count() > 0)
    <h2>Images:</h2>
    <ul>
        @foreach($post->images as $image)
            <li>
                <img src="{{ asset('storage/' . $image->path) }}" alt="Image">
            </li>
        @endforeach
    </ul>
@endif

    </div>
</body>
</html>