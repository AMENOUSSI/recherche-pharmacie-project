<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required
                autocomplete="current-password" />
            <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" />

            <div class="flex flex-col">
               {{--  <div class="flex items-center justify-end mb-4">
                    @if (Route::has('password.request'))
                    <Link class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </Link>
                    @endif
                </div> --}}

                <x-splade-submit class="w-full" :label="__('Log in')" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>




