<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/login.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="group">
                            <label for="email" class="label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="group">
                            <label for="pass" class="label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password" data-type="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="group">
                            <input  class="check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                            <label for="remember"><span class="icon"></span> {{ __('Remember Me') }}</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="{{ __('Login') }}">
                        </div>
                        <div class="hr"></div>
                        @if (Route::has('password.request'))
                            <div class="foot-lnk">
                                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        @endif
                    </div>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>