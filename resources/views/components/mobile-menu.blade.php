<div class="mobile-menu fixed hidden md:hidden z-30 bg-white h-full min-h-screen w-[300px] overflow-y-scroll"
    data-mobile-menu-sidedraw>
    <header class="w-full h-14 bg-white flex items-center justify-between pl-4 pr-2 mb-1">
        <h2 class="text-lg font-bold">DEV Community</h2>
        <button class="p-2" data-mobile-menu-close-button>
            <x-icon.close />
        </button>
    </header>
    @guest
    <x-login-info-card />
    @endguest
    <!-- Start of navigation -->
    <x-nav.main />
</div>
