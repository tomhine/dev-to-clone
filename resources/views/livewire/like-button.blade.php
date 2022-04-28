<button type="button" class="flex flex-col items-center group" wire:click="likeHandler" @click="console.log('hello')"
    x-data="{ liked: @entangle('currentUserHasLiked')  }">
    <span class="w-10 h-10 rounded-full group-hover:bg-red-500/10 flex items-center justify-center">
        <x-icon.heart class="h-6 w-6 group-hover:text-red-500" />
    </span>
    <p class="text-sm">{{ $count }}</p>
</button>
