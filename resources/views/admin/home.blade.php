@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-5">
        <h2>Welcome back <span class="text-primary">{{ Auth::user()->name }}</span>!</h2>
        <a href="{{ route('admin.posts.index') }}"> Manage your posts</a> or <a href="{{ route('guest.welcome')}}"> return to site</a>
        </div>
    </div>
</div>
@endsection
