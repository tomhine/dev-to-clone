<x-app-layout title="Create a post">
    <form action="{{ route('posts.store') }}" method="post" class="flex w-full max-w-7xl">
        @csrf
        <div class="hidden md:block w-36"></div>
        <div class="w-full flex flex-col gap-2">
            <section class="w-full pt-8 pb-2 bg-white rounded-xl h-full border flex flex-col">
                <!-- Title input -->
                <div class="px-16">
                    <input id="title"
                        class="block w-full outline-none border-none placeholder:text-5xl placeholder:font-bold placeholder-neutral-600 focus:ring-0 p-0 h-16"
                        type="text" name="title" :value="old('title')" placeholder="New post title here..." required
                        data-create-title />
                </div>
                <!-- Tag input -->
                <div class="px-16">
                    <input id="tags"
                        class="block w-full outline-none border-none placeholder-neutral-600 focus:ring-0 p-0 h-12"
                        placeholder="Add up to 4 tags..." type="text" name="tags" :value="old('tags')"
                        data-create-tags />
                </div>
                <!-- Content input -->
                <div class="mt-8">
                    <div class="w-full bg-[#f9f9f9] h-14 px-14 flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <x-button.hover type="button" aria-label="bold" data-markdown-button
                                data-markdown-button-bold>
                                <x-icon.markdown.bold data-markdown-button data-markdown-button-bold />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="italic" data-markdown-button
                                data-markdown-button-italic>
                                <x-icon.markdown.italic />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="link" data-markdown-button
                                data-markdown-button-link>
                                <x-icon.markdown.link />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="ordered list" data-markdown-button
                                data-markdown-button-ordered-list>
                                <x-icon.markdown.ordered-list />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="ordered list" data-markdown-button
                                data-markdown-button-unordered-list>
                                <x-icon.markdown.unordered-list />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="heading" data-markdown-button
                                data-markdown-button-heading>
                                <x-icon.markdown.heading />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="quote" data-markdown-button
                                data-markdown-button-quote>
                                <x-icon.markdown.quote />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="code" data-markdown-button
                                data-markdown-button-code>
                                <x-icon.markdown.code />
                            </x-button.hover>
                            <x-button.hover type="button" aria-label="code block" data-markdown-button
                                data-markdown-button-code-block>
                                <x-icon.markdown.code-block />
                            </x-button.hover>
                        </div>
                    </div>
                    <textarea name="content" id="content" class="px-16 py-8 resize-none w-full h-[420px] text-lg font-mono rounded-md shadow-sm
                        border-none focus:ring-0" :value="old('content')" data-create-content></textarea>
                </div>
            </section>
            <div>
                <x-button>Publish</x-button>
            </div>
        </div>
        <aside class="hidden md:flex flex-col w-full max-w-xs prose p-8">
            <!-- Title info -->
            <div class="hidden" data-info data-info-title>
                <h3>Writing a Great Post Title</h3>
                <ul>
                    <li>Think of your post title as a super short (but compelling!) description — like an overview of
                        the actual post in one short sentence.</li>
                    <li>Use keywords where appropriate to help ensure people can find your post by search.</li>
                </ul>
            </div>
            <!-- Tags info -->
            <div class="hidden" data-info data-info-tags>
                <h3>Tagging Guidelines</h3>
                <ul>
                    <li>Tags help people find your post.</li>
                    <li>Think of tags as the topics or categories that best describe your post.</li>
                    <li>Add up to four comma-separated tags per post. Combine tags to reach the appropriate
                        subcommunities.</li>
                    <li>Use existing tags whenever possible.</li>
                    <li>Some tags, such as “help” or “healthydebate”, have special posting guidelines.</li>
                </ul>
            </div>
            <!-- Content info -->
            <div class="hidden" data-info data-info-content>
                <h3>Editor Basics</h3>
                <ul>
                    <li>Use <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">Markdown</a> to write
                        and format posts.</li>
                </ul>
            </div>
        </aside>
    </form>
    <x-slot:scripts>
        <script src="{{ asset('js/createPostInfo.js') }}" defer></script>
        <script src="{{ asset('js/markdownEditor.js') }}" defer></script>
        </x-slot>
</x-app-layout>
