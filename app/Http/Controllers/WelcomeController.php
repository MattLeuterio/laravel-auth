<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class WelcomeController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('guest.welcome', compact('posts'));
    }
}
