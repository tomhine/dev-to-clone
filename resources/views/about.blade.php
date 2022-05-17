<x-app-layout>
    <x-article-wrapper>
        <section class="space-y-6">
            <h1 class="text-5xl font-extrabold">About DEV</h1>
            <p>DEV is a community of software developers getting together to help one another out. The software industry
                relies on collaboration and networked learning. We provide a place for that to happen.</p>
            <p>DEV is built on <x-link.a href="https://forem.com/" class="underline">Forem</x-link.a>: open source
                software designed to
                empower communities. Because our application is
                <x-link.a href="#" class="underline">open source</x-link.a>, you can inspect every
                little detail of the
                code, or chip in yourself! Forem is available
                for anyone interested in creating similar communities in any niche or passion. Visit our meta Forem,
                <x-link.a href="https://forem.com/" class="underline">forem.dev</x-link.a> for more information.
            </p>
            <p>We believe in transparency and adding value to the ecosystem. We hope you enjoy poking around and
                participating!</p>
        </section>
        <section class="space-y-6">
            <h2 class="text-3xl font-extrabold">Leadership</h2>
            <img src="{{ asset('images/about/leadership.jfif') }}" alt="dev.to leadership" class="rounded-lg">
            <p>DEV is led by Forem's co-founders <x-link.a href="#" class="underline">Ben Halpern</x-link.a>, <x-link.a
                    href="#" class="underline">Jess Lee</x-link.a>, and <x-link.a href="#" class="underline">Peter Frank
                </x-link.a> ("PB&J").</p>
        </section>
        <section class="space-y-6">
            <h2 class="text-3xl font-extrabold">Team</h2>
            <img src="{{ asset('images/about/team.jfif') }}" alt="dev.to team" class="rounded-lg">
            <p>Our team is distributed around the world. We have no office, but we come together online each day to
                build community and improve the software careers of millions.</p>
            <p>Happy coding ❤️</p>
        </section>
    </x-article-wrapper>
</x-app-layout>
