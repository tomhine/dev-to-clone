<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeButton extends Component
{
    public Post $post;
    public int $count;
    public bool $currentUserHasLiked;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->count = $post->likes_count;

        if (Auth::user()) {
            $this->currentUserHasLiked = Auth::user()->likes->contains('id', $post->id);
        }
    }

    public function likeHandler()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if ($this->currentUserHasLiked) {
            $this->count--;
            Like::query()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $this->post->id)->delete();
            $this->currentUserHasLiked = false;
        } else {
            $this->count++;

            $like = new Like();
            $like->post_id = $this->post->id;
            $like->user_id = Auth::user()->id;

            $like->save();

            $this->currentUserHasLiked = true;
        }
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
