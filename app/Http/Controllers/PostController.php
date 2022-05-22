<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Get all posts with the author and return the home view
     */
    public function index()
    {
        // $posts = Post::with(['author:id,name', 'bookmarks'])->latest()->get();
        $posts = Post::query()->with(['author:id,name', 'bookmarks'])->get();

        foreach($posts as $post) {
            $post->tags = explode(',', $post->tags);
        }

        return view('index', ['posts' => $posts]);
    }

    /**
     * Get all posts {latest first} with the author and return the home view
     */
    public function latest()
    {
        // $posts = Post::with(['author:id,name', 'bookmarks'])->latest()->get();
        $posts = Post::query()->with(['author:id,name', 'bookmarks'])->latest()->get();

        foreach($posts as $post) {
            $post->tags = explode(',', $post->tags);
        }

        return view('index', ['posts' => $posts]);
    }

    /**
     * Get all posts with a title that maches the search term with the author and return the search view
     */
    public function search(Request $request)
    {
        $search = trim($request->input('search'));

        // $posts = Post::with(['author:id,name', 'bookmarks'])->latest()->get();
        $posts = Post::query()->where('title', 'LIKE', "%{$search}%")->with(['author:id,name', 'bookmarks'])->get();

        foreach($posts as $post) {
            $post->tags = explode(',', $post->tags);
        }

        return view('search', ['posts' => $posts, 'searchTerm' => $search]);
    }

    /**
     * Get a single post from the slug with the author and return the single post view
     *
     * @param Post $post
     */
    public function show(Post $post)
    {
        $p = $post->load('author');

        $p->tags = explode(',', $p->tags);

        return view('posts.post', ['post' => $p]);
    }

    /**
     * Get the create post view if authenticated
     */
    public function create()
    {
        return view('new.index');
    }

    /**
     * Delete the given blog post
     */
    public function destroy(int $postId)
    {
        $post = Post::query()->where('id', $postId)->where('author_id', Auth::user()->id);

        $post->delete();

        return back();
    }
}
