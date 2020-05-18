@extends('layouts.app')


@section('content')
<div class="row">


@foreach($blogs as $blog)




<div class="col-md-6">
<br><br>
 <div class="card">
 <div class="card-header">
 <a href="{{ route('blog_path', $blog->id ) }}">{{ $blog->id }} {{ $blog->title }}</a>

 </div>
 <div class="card-body">
 <a href="{{ route('blog_path', $blog->id ) }}">
 <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
 </a>


<br>
<br>
<br>
<p class="lead">posted {{ $blog->created_at->diffForHumans() }}</p>
<a href="{{  route('blog_path', $blog->id)}}" class="btn btn-outline-primary">View Post</a>

 </div>

 </div>
</div>




@endforeach
</div>



@endsection
