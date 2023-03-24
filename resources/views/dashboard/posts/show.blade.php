@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
    <h2 class="mb-3">{{ $post->title }}</h2>

<a href="/dashboard/posts" class="btn btn-success my-2"> <span data-feather="arrow-left" class="align-text-bottom"></span> back to all my posts</a>
<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-2"> <span data-feather="edit" class="align-text-bottom"></span>edit</a>


<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('are you sure ?')"><span data-feather="x-circle" class="align-text-bottom"></span>delete</button>

    </form>



@if ($post->image)
<div style="max-height: 350px;overflow: hidden">

<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
</div>

@else
    
<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
@endif

    <article my-3 fs-5>
        
        {!! $post->body !!}
    </article>
</div>
@endsection