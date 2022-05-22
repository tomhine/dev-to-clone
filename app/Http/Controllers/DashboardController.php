<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::query()->where('author_id', Auth::user()->id)->get();

        return view('dashboard', [
            'posts' => $posts,
        ]);
    }
}
