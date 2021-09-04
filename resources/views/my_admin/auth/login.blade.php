<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('backend/css/vendor.css')}}">
        <link rel="stylesheet" href="{{ asset('backend/css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('backend/css/custom.css')}}">


    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                             PREK LEAP HIGTH SCHOOL
                        </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center"></p>
                        <form action="{{route('admin.login')}}" method="POST" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="username">E-mail</label>
                                <input type="email" class="form-control underlined @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your email address" autofocus value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined @error('password') is-invalid @enderror" name="password" id="password" placeholder="Your password" value="{{old('password')}}">
                                @error('password')
                                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                <!-- <a href="reset.html" class="forgot-btn pull-right">Forgot password?</a> -->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Log In</button>
                            </div>
                            <div class="form-group">
                                <!-- <p class="text-muted text-center">Do not have an account? <a href="signup.html">Sign Up!</a></p> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">

                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
