<x-app-layout title="Create a post">
    <div class="flex flex-col gap-2 w-full max-w-5xl">
        <section class="px-8 pt-8 pb-2 bg-white rounded-xl border flex flex-col gap-2">
            <form action="{{ route('posts.store') }}" method="post" class="p-4">
                @csrf
                <div class="mb-6">
                    <input id="title" style="font-family: 'Segoe UI'"
                        class="block w-full outline-none border-none placeholder:text-5xl placeholder:font-bold placeholder-gray-400 focus:ring-0 p-0 h-12"
                        type="text" name="title" :value="old('title')" placeholder="New post title here..." required
                        autofocus />
                </div>
                <div class="mb-6">
                    <x-label for="tags" :value="__('Tags')" />

                    <x-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')" />
                </div>
                <div class="mb-6">
                    <x-label for="content" :value="__('Content')" />

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
