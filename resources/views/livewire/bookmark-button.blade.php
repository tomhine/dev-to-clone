<button type="button" class="flex flex-col items-center group" wire:click="bookmarkHandler"
    x-data="{ bookmarked: @entangle('currentUserHasBookmarked')  }">
    <span class="w-10 h-10 rounded-full group-hover:bg-brand-purple/10 flex items-center justify-center"
        :class="bookmarked && 'border-2 bg-brand-purple/10 border-brand-purple text-brand-purple'">
        <x-icon.bookmark class="h-6 w-6 group-hover:text-brand-purple" />
    </span>
    <p class="text-sm">{{ $count }}</p>
</button>
