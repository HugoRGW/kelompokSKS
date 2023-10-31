<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekstrakurikuler SMKN 8 Malang</title>

    <!-- Font Icon Login Register -->
    <link rel="stylesheet"
        href="{{ asset('loginregister/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main CSS Login Register -->
    <link rel="stylesheet" href="{{ asset('loginregister/css/style.css') }}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .invalid-feedback {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .form-input.is-invalid {
            border-color: red;
        }
    </style>
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('login') }}" id="signup-form" class="signup-form">
                        @csrf

                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"
                                required autocomplete="email" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password"
                                class="form-input form-control @error('password') is-invalid @enderror" name="password"
                                id="password" placeholder="Password" required autocomplete="current-password" />
                            <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                {{ old('remember') ? 'checked' : '' }} />
                            <label for="remember" class="label-remember"><span><span></span></span>Remember Me</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('loginregister/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('loginregister/js/main.js') }}"></script>
</body>

</html>
