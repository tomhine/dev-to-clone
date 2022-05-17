<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    /**
     * Return the reading list view with the current users bookmarked posts
     *
     * @return void
     */
    public function index()
    {
        return view('reading-list', [
            'bookmarks' => Bookmark::with(['post', 'user'])->where('user_id', Auth::user()->id)->get()
        ]);
    }
}
