<!-- resources/views/posts/edit.blade.php -->

<form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $post->title }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" rows="4" required>{{ $post->content }}</textarea>
    <br>
    <label for="images">Images:</label>
    <input type="file" name="images[]" multiple accept="image/*">
    <br>
    <button type="submit">Update Post</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
