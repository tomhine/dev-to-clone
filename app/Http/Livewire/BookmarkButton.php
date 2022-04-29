<?php

namespace App\Http\Livewire;

use App\Models\Bookmark;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookmarkButton extends Component
{
    public Post $post;
    public int $count;
    public bool $currentUserHasBookmarked;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->count = $post->bookmarks_count;

        if (Auth::user()) {
            $this->currentUserHasBookmarked = Bookmark::query()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $this->post->id)->exists();
        }
    }

    public function bookmarkHandler()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if ($this->currentUserHasBookmarked) {
            $this->count--;
            Bookmark::query()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $this->post->id)->delete();
            $this->currentUserHasBookmarked = false;
        } else {
            $this->count++;

            $bookmark = new Bookmark();
            $bookmark->post_id = $this->post->id;
            $bookmark->user_id = Auth::user()->id;

            $bookmark->save();

            $this->currentUserHasBookmarked = true;
        }
    }

    public function render()
    {
        return view('livewire.bookmark-button');
    }
}
