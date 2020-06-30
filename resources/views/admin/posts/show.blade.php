@extends('layouts.admin')

@section('content')
<div class="container">
    
    <div class="title-page mb-5">
        <h1>{{ $post->title }}</h1>
        <p>by {{ Auth::user()->name }}</p>
    </div>    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="mb-3">
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->format('d/m/Y')}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
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
        </tbody>
    </table>
</div>
@endsection
