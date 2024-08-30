<style>
    /* body {
        background-color: #f8f9fa;
    } */

    .login-section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f8f9fa;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    }

    .card-header {
        background-color: #007bff;
        color: white;
        padding: 15px;
        border-bottom: none;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 24px;
    }

    .card-body {
        padding: 30px;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-top: none;
        padding: 15px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-check-label {
        font-size: 14px;
    }

    .form-control {
        border-radius: 4px;
        padding: 10px;
        border: 1px solid #ced4da;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .text-sm {
        font-size: 14px;
        color: #007bff;
        text-decoration: underline;
    }

    .text-sm:hover {
        color: #0056b3;
    }
</style>

<x-guest-layout>
    <div class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>{{ __('Login') }}</h2>
                        </div>

                        <div class="card-body">
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="form-group mt-4">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="form-control" type="password" name="password" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group mt-4">
                                    <div class="form-check">
                                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                        <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                                    </div>
                                </div>

                                <div class="form-group mt-4 d-flex justify-content-between">
                                    @if (Route::has('password.request'))
                                    <a class="text-sm" href="{{ route('password.request') }}">
                                    </a>
                                    @endif

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer text-center">
                            @if (Route::has('register'))
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>