@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Welcome
            @if(Auth::check())
                {{Auth::user()->name}}
            @else
                Guest!
            @endif
        </h1>
    </div>
    <div class="row mt-5">
        <div class="latest-post">
            <h2>Latest Blog's posts</h2>
    
            @foreach ($posts as $post)
                <article class="mb-3">
                    <h2>{{$post->title}}</h2>
                    @if(isset($post->path_img))
                        <img width="400" src="{{ asset('storage/' . $post->path_img) }}" alt="">
                    @endif
                    <p>{{$post->body}}</p>
                </article>
            @endforeach
        </div>
    </div>
</div>
@endsection
