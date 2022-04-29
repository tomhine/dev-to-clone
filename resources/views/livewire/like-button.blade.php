<button type="button" class="flex flex-col items-center group" wire:click="likeHandler"
    x-data="{ liked: @entangle('currentUserHasLiked')  }">
    <span class="w-10 h-10 rounded-full group-hover:bg-red-500/10 flex items-center justify-center"
        :class="liked && 'border-2 bg-red-500/10 border-red-500 text-red-500'">
        <x-icon.heart class="h-6 w-6 group-hover:text-red-500" />
    </span>
    <p class="text-sm">{{ $count }}</p>
</button>
