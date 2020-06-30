@extends('layouts.admin')

@section('content')
<div class="container">
    
    <div class="title-page mb-5">
        <h1>Create New Post</h1>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"class="form-control" value="{{ old('title', $post->title) }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" id="body" class="form-control" value="{{ old('body', $post->body) }}">
        </div>

        <input class="btn btn-success" type="submit" value="Edit post">
    </form>
    
</div>
@endsection
