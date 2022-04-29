<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Unicorn;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UnicornButton extends Component
{
    public Post $post;
    public int $count;
    public bool $currentUserHasUnicorned;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->count = $post->unicorns_count;

        if (Auth::user()) {
            $this->currentUserHasUnicorned = Unicorn::query()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $this->post->id)->exists();
        }
    }

    public function unicornHandler()
    {
        if (!Auth::user()) {
            return redirect('/login');
        }

        if ($this->currentUserHasUnicorned) {
            $this->count--;
            Unicorn::query()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $this->post->id)->delete();
            $this->currentUserHasUnicorned = false;
        } else {
            $this->count++;

            $unicorn = new Unicorn();
            $unicorn->post_id = $this->post->id;
            $unicorn->user_id = Auth::user()->id;

            $unicorn->save();

            $this->currentUserHasUnicorned = true;
        }
    }

    public function render()
    {
        return view('livewire.unicorn-button');
    }
}
