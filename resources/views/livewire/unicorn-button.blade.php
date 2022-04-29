<button type="button" class="flex flex-col items-center group" wire:click="unicornHandler"
    x-data="{ unicorned: @entangle('currentUserHasUnicorned') }">
    <span class="w-10 h-10 rounded-full group-hover:bg-emerald-500/10 flex items-center justify-center"
        :class="unicorned && 'border-2 border-emerald-500 bg-emerald-500/10 text-emerald-500'">
        <x-icon.unicorn class="h-6 w-6 group-hover:text-emerald-500" />
    </span>
    <p class="text-sm">{{ $count }}</p>
</button>
