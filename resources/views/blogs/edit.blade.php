@extends('layouts.app')

@section('content')
<form action="{{ route('update_blog_path',  $blog->id) }}" method="post">

@csrf

@method('put')

<div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" class="form-control" value="{{ $blog->title }}">
</div>
<div class="form-group">
<label for="title">Content</label>
<textarea name="content" id="" cols="10" class="form-control">
{{ $blog->content }}
</textarea>
</div>
<div class="form-group">
<input type="file" name="images" class="form-control">
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Edit Blog Post</button>
</div>
</form>
@endsection
