@extends('layouts.admin')

@section('content')
<div class="container">
    
    <div class="title-page mb-5">
        <h1>Blog's Posts</h1>
    <p><span class="text-primary">{{ Auth::user()->name }}'s</span> panel.</p>
    </div>
    @if (session('post-deleted'))
        <div class="alert alert-success">
            <div>Post deleted successfully:</div>
             {{ session('post-deleted') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="mb-3">
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at->format('d/m/Y')}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
                <td>
                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-success">Show</a>
                </td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                </td>
                <td>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
