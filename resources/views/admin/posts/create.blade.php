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

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"class="form-control" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" id="body" class="form-control" value="{{ old('body') }}">
        </div>

        <input class="btn btn-success" type="submit" value="Create new post">
    </form>
    
</div>
@endsection
