<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center"
        style="height: 100vh; background: linear-gradient(to bottom, #0E6FFD, #0E6FFD); margin: 0; padding: 0;">
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px; border-radius: 10px;">
            <div class="text-center mb-3">
                <img src="{{ Vite::asset('resources\images\Vector 1.png') }}" alt="image"
                    style="width: 45px; height: auto;">
            </div>
            <h4 class="text-center fw-bold">Employee Data Master</h4>
            <br>
            <hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Enter Your Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Enter Your Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Enter Your Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <hr><br>

                <div class="d-grid">
                    <button type="submit"
                        style="padding: 12px 20px; background-color: #007bff; color: white; border-radius:15px; border:none;"><i
                            class="fa-solid fa-right-to-bracket"></i>
                        {{ __('Log In') }}

                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
