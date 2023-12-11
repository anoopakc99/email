<!-- resources/views/posts/index.blade.php -->

<h1>All Blog Posts</h1>

@foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        @if($post->images->count() > 0)
            <h3>Images:</h3>
            <ul>
                @foreach($post->images as $image)
                    <li>
                        <img src="{{ asset('storage/' . $image->path) }}" alt="Image" style="max-height:100px; max-width:100px">
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <hr>
@endforeach



<!--  -->
