<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" rows="4" required></textarea>
    <br>
    <label for="images">Images:</label>
    <input type="file" name="images[]" multiple accept="image/*">
    <br>
    <button type="submit">Create Post</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif