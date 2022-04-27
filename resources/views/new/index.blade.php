<x-app-layout title="Create a post">
    <div class="flex flex-col gap-2 w-full max-w-5xl">
        <section class="px-8 pt-8 pb-2 bg-white rounded-xl border flex flex-col gap-2">
            <div>
                <h2 class="text-3xl font-bold">Create a new post!</h2>
            </div>
            <form action="{{ route('posts.store') }}" method="post" class="p-4">
                @csrf
                <div class="mb-6">
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                        required autofocus />
                </div>
                <div class="mb-6">
                    <x-label for="tags" :value="__('Tags')" />

                    <x-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')" />
                </div>
                <div class="mb-6">
                    <x-label for="content" :value="__('Content')" />

                    {{-- <textarea id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')" />
                    --}}

                    <textarea name="content" id="content" class="resize-none w-full h-[480px] rounded-md shadow-sm
                    border-gray-300 focus:border-brand-purple focus:ring-0 focus:ring-opacity-50"
                        :value="old('content')"></textarea>
                </div>
                <div>
                    <x-button>Publish</x-button>
                </div>
            </form>
        </section>
    </div>
</x-app-layout>
