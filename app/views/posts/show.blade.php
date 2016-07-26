<!-- app/views/posts/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('posts') }}">Post Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('posts') }}">View All Posts</a></li>
        <li><a href="{{ URL::to('posts/create') }}">Create a Post</a>
    </ul>
</nav>

<h1>Showing {{ $post->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $post->title }}</h2>
        <p>
            <strong>Id:</strong> {{ $post->id }}<br>
            <strong>Slug:</strong> {{ $post->slug }}<br>
            <strong>Title:</strong> {{ $post->title }}<br>
            <strong>Content:</strong> {{ $post->content }}<br>
            <strong>Published:</strong> {{ $post->published }}<br>
            <strong>Featured:</strong> {{ $post->featured }}<br>
            <strong>category:</strong> {{ $post->category }}<br>
        </p>
    </div>

</div>
</body>
</html>