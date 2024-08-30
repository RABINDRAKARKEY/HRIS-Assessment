<x-guest-layout>
    <div class="register-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>{{ __('Register') }}</h2>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-group">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="form-group mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group mt-4">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="form-control" type="password" name="password" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="form-group mt-4 d-flex justify-content-between">
                                    <!-- <a class="text-sm" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a> -->

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="form-group mt-4 d-flex justify-content-between">
                        </div>


                        <div class="card-footer text-center">
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}">{{ __('Already registered? Login') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>