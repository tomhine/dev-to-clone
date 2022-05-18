<x-app-layout title="Dashboard">
    <div class="w-full max-w-7xl space-y-4 px-4">
        <div class="px-2 md:px-0">
            <h1 class="font-bold text-3xl text-black">Dashboard</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4">
            <x-dash.metric-card>
                <x-slot:value>0</x-slot:value>
                <x-slot:info>Total post reactions</x-slot:info>
            </x-dash.metric-card>
            <x-dash.metric-card>
                <x-slot:value>&lt;500</x-slot:value>
                <x-slot:info>Total post views</x-slot:info>
            </x-dash.metric-card>
            <x-dash.metric-card>
                <x-slot:value>0</x-slot:value>
                <x-slot:info>Listings created</x-slot:info>
            </x-dash.metric-card>
            <x-dash.metric-card>
                <x-slot:value>0</x-slot:value>
                <x-slot:info>Credits available</x-slot:info>
            </x-dash.metric-card>
        </div>
        <div class="w-full flex gap-4">
            <aside class="hidden md:block w-full max-w-[240px]"></aside>
            <div class="w-full p-6 space-y-8">

            </div>
        </div>
    </div>
</x-app-layout>
