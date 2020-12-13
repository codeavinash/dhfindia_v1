<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Dinbandhu help foundation | the best foundation to help you</title>
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Auth/loginPage.css') }}">

    <script src="{{ asset('js/paswordField.js') }}" defer></script>
</head>
<body>
    
    <section class="container-Section backgroundImage f jc ac" style="background-image: linear-gradient(rgba(20, 20, 20, 0.904),rgba(20, 20, 20, 0.904)),url('{{ asset('images/backgroundimageThree.jpg') }}')">
        <div class="login-form-container">
            <div class="logo-image-container f jc ac">
                <img src="{{ asset('images/fullLogo.svg') }}" alt="">
            </div>

            <h1 class="form-heading">log in</h1>
            @error('email')
            <p class="short-text-para error-color">{{ $message }}</p>
            @else
            @error('password')
            <p class="short-text-para error-color">{{ $message }}</p>
            @else
            <p class="short-text-para">join us for more information</p>
            @enderror

            
            @enderror

            

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" class="input-label">Email/Username</label>
                <input type="email" class="input-field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <label for="email" class="input-label">Password</label>
                <div class="password-field-container f ac">
                    <input type="password" class="password-filed" name="password" >
                    <i class="im im-eye eye-icon" id="eye-btn"></i>
                </div>

                <div class="form-btn-container f jb ac">
                        <div class="f ja ac checkBox">
                            <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} id="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }} " class="forgot-link">Forgot Your Password?</a>
                        <button type="submit" class="submit-btn">login</button>
                </div>
            </form>

            <a href="{{ route('register') }}" class="create-new-account-btn f jc ac">create new account</a>

        </div>
    </section>

</body>
</html>