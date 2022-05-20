<x-app-layout title="Create a post">
    <livewire:post-form />
    <x-slot:scripts>
        <script src="{{ asset('js/createPostInfo.js') }}" defer></script>
        <script src="{{ asset('js/markdownEditor.js') }}" defer></script>
        <script src="{{ asset('js/markdownPreview.js') }}" defer></script>
    </x-slot:scripts>
</x-app-layout>
