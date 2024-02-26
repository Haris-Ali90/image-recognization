<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Recognition</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light & dark skins. A large number of settings, additional services and widgets."/>
    <meta name="keywords"
          content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Seven HTML Pro - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme - Seven HTML Free by KeenThemes"/>
    <meta property="og:url" content="https://keenthemes.com/products/seven-html-pro"/>
    <meta property="og:site_name" content="Seven HTML Free by Keenthemes"/>
    <link rel="canonical" href="https://preview.keenthemes.com/seven-html-pro"/>
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>

</head>
<body id="kt_body" class="auth-bg">

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<div class="d-flex flex-column flex-root">
    <style>
        .auth-page-bg {
            background-image: url('{{ asset('assets/media/illustrations/sigma-1/14.png') }}');
        }

        [data-bs-theme="dark"] .auth-page-bg {
            background-image: url('{{ asset('assets/media/illustrations/sigma-1/14-dark.png') }}');
        }
    </style>
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed auth-page-bg">
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <a href="" class="mb-12">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.svg') }}" class="h-60px"/>
            </a>
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">
                        Sign In to Seven HTML Free </h1>
                    <div class="text-gray-400 fw-semibold fs-4">
                        New Here?
                        <a href="{{ route('register') }}" class="link-primary fw-bold">
                            Create an Account
                        </a>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label class="form-label fs-6 fw-bold text-dark">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary col-md-12">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>

                    <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>

                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                             class="h-20px me-3"/>
                        Continue with Google
                    </a>

                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                             class="h-20px me-3"/>
                        Continue with Facebook
                    </a>

                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}"
                             class="theme-light-show h-20px me-3"/>
                        Continue with Apple
                    </a>
                </form>
            </div>
        </div>

        <div class="d-flex flex-center flex-column-auto p-10">
            <div class="d-flex align-items-center fw-semibold fs-6">
                <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                <a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2">Support</a>
                <a href="https://keenthemes.com/products/seven-html-pro" class="text-muted text-hover-primary px-2">
                    Upgrade To Pro
                </a>
            </div>
        </div>
    </div>
</div>


{{--<script>--}}
    {{--var hostUrl = "/seven-html-free/assets/";        </script>--}}

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
</body>
</html>
