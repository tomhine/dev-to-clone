<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class PostForm extends Component
{
    use WithFileUploads;

    public $bannerImage;
    public $title;
    public $tags;
    public $content;

    public function updatedBannerImage()
    {
        $this->validate([
            'bannerImage' => 'image',
        ]);
    }

    public function updatedTitle()
    {
        $this->validate([
            'title' => 'required|max:255',
        ]);
    }

    public function updatedTags()
    {
        $this->validate([
            'tags' => ['regex:/[A-Za-z,]+/', 'max:255'],
        ]);
    }

    public function updatedContent()
    {
        $this->validate([
            'content' => 'required',
        ]);
    }

    public function removeBannerImage()
    {
        $this->bannerImage = null;
    }

    public function submitForm()
    {
        $post = new Post();
        $post->title = $this->title;
        $post->slug = Str::slug($this->title);
        $post->tags = $this->tags;
        $post->content = $this->content;
        $post->author_id = Auth::id();

        if ($this->bannerImage) {
            $imageUrl = $this->bannerImage->store('public/images/banners');
            $post->banner_image_url = str_replace('public', 'storage', $imageUrl);
        }

        $post->save();

        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
