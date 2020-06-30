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

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"class="form-control" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" name="body" id="body" class="form-control">{{ old('body')}}</textarea>
        </div>

        <div class="form-group">
            <label for="path_img">Post Image</label>
            <input type="file" name="path_img" id="path_img" class="form-control" accept="image/*">
        </div>

        <input class="btn btn-success" type="submit" value="Create new post">
    </form>
    
</div>
@endsection
