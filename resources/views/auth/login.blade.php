<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" />
            </a>
        </x-slot>

        <x-slot name="title">
            <h4>Login</h4>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                    <label class="custom-control-label" for="remember_me">{{ __('Remember Me') }}</label>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('register') }}" class="text-small">Register</a>
                <x-button type='submit'>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
