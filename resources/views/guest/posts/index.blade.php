@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Blog's Posts</h1>
    @foreach($posts as $post)
    <article class="mb-3">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </article>
    @endforeach
    <div class="pagination d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

</div>
@endsection
