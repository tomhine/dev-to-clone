<x-app-layout title="Log in">
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Forgotten password -->
            <div class="w-full flex flex-col gap-8 items-center mt-4">
                <x-button class="w-full">
                    {{ __('Continue') }}
                </x-button>
                @if (Route::has('password.request'))
                <x-link.a class="text-sm" href="{{ route('password.request') }}">
                    {{ __('I forgot my password') }}
                </x-link.a>
                @endif
            </div>

        </form>
    </x-auth-card>

    <div class="flex flex-col gap-4 p-8 w-full rounded-md border border-brand-purple bg-white mx-auto max-w-xl">
        <p class="text-brand-purple font-bold text-xl">Here's a loaner login for you to use;</p>
        <ul>
            <li>Email: <span class="font-bold">admin@tomhine.dev</span></li>
            <li>Password: <span class="font-bold">password</span></li>
        </ul>
    </div>

</x-app-layout>
