<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Pharmacy | Login</title>
    <link rel="icon" type="image/x-icon" href="{{asset('Backend_assets/assets/img/favicon1.png')}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="{{asset('Backend_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('Backend_assets/assets/css/plugins.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('Backend_assets/assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('Backend_assets/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Backend_assets/assets/css/forms/switches.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
</head>

<body class="form" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">Log In to Parmacy</h1>

                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="text-left" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" type="email" name="email" :value="old('email')" required
                                        autofocus class="form-control @error('email') is-invalid @enderror" placeholder="Username">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" type="password" name="password"  required
                                        autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="block mt-4">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="form-checkbox" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    {{-- <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div> --}}
                                    <p class="signup-link">New Here? <a href="{{ route('register') }}">Create an
                                            account</a></p>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                </div>
                                <div class="field-wrapper">
                                    <a href="{{ route('password.request') }}" class="forgot-pass-link">Forgot
                                        Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="image-responsive">
                <img style="height: 100vh; margin-left:35px" src="{{asset ('Backend_assets/images/pharmacy1.jpg') }}"
                    alt="">
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/authentication/form-1.js')}}"></script>
</body>

</html>
