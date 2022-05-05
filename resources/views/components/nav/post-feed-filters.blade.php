<div class="flex items-center justify-between">
    <nav>
        <ul class="flex items-center flex-between">
            <li>
                <a href="{{ route('home') }}"
                    class="px-3 py-2 text-lg capitalize rounded-md hover:text-brand-purple hover:bg-white
                        {{ Request::route()->getName() === 'home' ? 'text-black font-bold' : 'text-gray-600' }}">relevant</a>
                <a href="{{ route('latest') }}"
                    class="px-3 py-2 text-lg capitalize rounded-md hover:text-brand-purple hover:bg-white
                        {{ Request::route()->getName() === 'latest' ? 'text-black font-bold' : 'text-gray-600' }}">latest</a>
                <a href="{{ route('top') }}" class="px-3 py-2 text-lg capitalize rounded-md hover:text-brand-purple hover:bg-white
                        {{ Request::route()->getName() === 'top' ? 'text-black font-bold' : 'text-gray-600' }}">top</a>
            </li>
        </ul>
    </nav>
</div>
