<!-- app/views/posts/edit.blade.php -->

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

<h1>Edit {{ $post->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', Input::old('slug'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('content', 'Content') }}
        {{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('published', 'Published') }}
        {{ Form::select('published', array('0' => 'No', '1' => 'Yes'),
            Input::old('published'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('featured', 'Featured') }}
        {{ Form::select('featured', array('0' => 'No', '1' => 'Yes'),
            Input::old('featured'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('category', 'Category') }}
        {{ Form::text('category', Input::old('category'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Post!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
