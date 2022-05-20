<form wire:submit.prevent="submitForm" class="flex w-full max-w-7xl" enctype="multipart/form-data"
    accept=".png, .jpg, .jpeg, .webp">
    @csrf
    <div class="hidden md:block w-36"></div>
    <div class="w-full flex flex-col gap-2">
        <section class="relative w-full pt-4 md:pt-8 pb-2 bg-white rounded-xl h-full border flex flex-col">
            <!-- Preview -->
            <div class="hidden absolute left-0 top-0 h-full w-full bg-white border rounded-xl z-10 px-2 py-4 md:p-16 md:pb-8"
                data-markdown-preview-window>
                <div class="prose md:prose-xl" data-markdown-preview-content></div>
            </div>

            <!-- Image upload -->
            <div class="px-2 md:px-16 my-4 flex items-center gap-4">
                @if ($bannerImage)
                <img src="{{ $bannerImage->temporaryUrl() }}" alt="banner image preview" class="h-20">
                @endif
                @error('bannerImage') <span class="text-red-500">{{ $message }}</span> @enderror
                <label for="banner_image"
                    class="ring-2 ring-gray-300 active:ring-gray-400 shadow active:shadow-md active:bg-gray-100 px-4 py-2 rounded-md cursor-pointer"
                    data-banner-image-upload-label>
                    @if($bannerImage)
                    Change image
                    @else
                    Add a cover image
                    @endif
                    <input type="file" name="banner_image" id="banner_image" wire:model="bannerImage"
                        class="absolute -left-[10000px] overflow-hidden h-1 w-1" data-banner-image-upload-input>
                </label>
                @if ($bannerImage)
                <button class="px-4 py-2 text-red-500 hover:bg-neutral-100 rounded-md"
                    wire:click="removeBannerImage">Remove</button>
                @endif
            </div>

            <!-- Title input -->
            <div class="px-2 md:px-16">
                <input id="title"
                    class="block w-full outline-none border-none text-3xl md:text-5xl font-bold placeholder:text-3xl md:placeholder:text-5xl placeholder:font-bold placeholder-neutral-500 focus:ring-0 p-0 h-16"
                    type="text" name="title" wire:model="title" :value="old('title')"
                    placeholder="New post title here..." required data-create-title />
            </div>
            <!-- Tag input -->
            <div class="px-2 md:px-16">
                <input id="tags"
                    class="block w-full outline-none border-none placeholder-neutral-500 focus:ring-0 p-0 h-12"
                    placeholder="Add up to 4 tags..." type="text" name="tags" wire:model="tags" :value="old('tags')"
                    data-create-tags />
            </div>
            <!-- Content input -->
            <div class="mt-4 md:mt-8">
                <div class="w-full bg-[#f9f9f9] h-16 md:h-14 md:px-14 flex items-center justify-between">
                    <div class="overflow-x-scroll md:overflow-auto flex items-center gap-1">
                        <x-button.hover type="button" aria-label="bold" data-markdown-button data-markdown-button-bold>
                            <x-icon.markdown.bold data-markdown-button data-markdown-button-bold />
                        </x-button.hover>
                        <x-button.hover type="button" aria-label="italic" data-markdown-button
                            data-markdown-button-italic>
                            <x-icon.markdown.italic />
                        </x-button.hover>
                        <x-button.hover type="button" aria-label="link" data-markdown-button data-markdown-button-link>
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
                        <x-button.hover type="button" aria-label="code" data-markdown-button data-markdown-button-code>
                            <x-icon.markdown.code />
                        </x-button.hover>
                        <x-button.hover type="button" aria-label="code block" data-markdown-button
                            data-markdown-button-code-block>
                            <x-icon.markdown.code-block />
                        </x-button.hover>
                    </div>
                </div>
                <textarea name="content" wire:model="content" id="content" class="px-2 md:px-16 py-8 resize-none w-full min-h-[50vh] text-lg font-mono rounded-md shadow-sm
                        border-none focus:ring-0" :value="old('content')" placeholder="Write your post content here..."
                    data-create-content></textarea>
            </div>
        </section>
        <div class="px-2 md:px-0">
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
                <li>Use <x-link.a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">Markdown
                    </x-link.a> to write
                    and format posts.</li>
            </ul>
        </div>
    </aside>
</form>
