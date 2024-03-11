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
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Vérifier l'email</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form method="POST" action="{{ route('password.email') }}">
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
                            <input type="submit" class="button" value="{{ __('Send Password Reset Link') }}">
                        </div>
                        <div class="hr"></div>
                        
                    </div>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>