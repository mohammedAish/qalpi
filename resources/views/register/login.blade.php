<x-guest-layout>
    <x-auth-card>

        <x-slot name="logo">
            <a href="/">
                <img src="{{asset('assets/images/enayah-logo.png')}}">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('users.user_login') }}" >
            @csrf

            <!-- Email Address -->
            <div class="text-right">
             <label>رقم الهوية</label>

                <x-input id="id_number" class="block mt-1 w-full" type="text" name="id_number" :value="old('id_number')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4 text-right" >
                <label> رقم الجوال</label>

                <x-input id="phone" class="block mt-1 w-full"
                                type="text"
                                name="phone"
                                required  />
            </div>

            <!-- Remember Me -->


            <div class="flex items-center text-cente mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <button class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold " style="background-color: #16736C;color:#fff">
                  تسجيل دخول
                <button>
            </div>
        </form>
    </div>
    </x-auth-card>
</x-guest-layout>
