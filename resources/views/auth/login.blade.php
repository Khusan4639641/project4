<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ URL::to('/') }}/styles/login.css">
    </head>
    <body>
    {{--<div class="card-header">{{ __('Login') }}</div>--}}
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <section>
            <div class="box">
                <div class="form">
                    <h2>Login</h2>
                    <form action="">
                        <div class="inputBx">
                            <input type="email" id="email" placeholder="user name" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <img src="/images/user.png" style="width:30px;" alt="">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="inputBx">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <img src="/images/padlock.png" style="width:30px;" alt="">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label class="remeber"><input type="checkbox">Click Me</label>
                        <div class="inputBx">
                            <input type="submit" value="login">
                        </div>
                    </form>
                    <p>Forget <a href="">Password</a></p>
                    <p>Need an <a href="">Account</a></p>
                </div>
            </div>
        </section>
        </form>
    </body>
</html>