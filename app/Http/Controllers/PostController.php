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
        $search = $request->input('search');

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
     * Validate a created post and store in the database
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'max:255'],
            'tags' => ['regex:/[A-Za-z,]+/', 'max:255'],
            'content' => ['required'],
        ]);

        $post = new Post();
        $post->title = $attributes['title'];
        $post->slug = Str::slug($attributes['title']);
        $post->preview = substr($attributes['content'], 0, 155);
        $post->tags = $attributes['tags'];
        $post->banner_image_url = "post-banner-" . rand(1, 4) . '.webp';
        $post->content = $attributes['content'];
        $post->author_id = Auth::id();

        $post->save();

        return redirect(route('home'));
    }
}
