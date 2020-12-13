<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new account | register for getting new notification | dinbandhu help foundation</title>
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Auth/loginPage.css') }}">

    <script src="{{ asset('js/paswordField.js') }}" defer></script>

</head>
<body>
    
    <section class="container-Section backgroundImage register-form f jc ac" style="background-image: linear-gradient(rgba(20, 20, 20, 0.904),rgba(20, 20, 20, 0.904)),url('{{ asset('images/headerImageOne.jpeg') }}')">
        <div class="login-form-container">
            <div class="logo-image-container f jc ac">
                <img src="{{ asset('images/fullLogo.svg') }}" alt="">
            </div>

            <h1 class="form-heading">create new account</h1>
            @error('email')
            <p class="short-text-para error-color">{{ $message }}</p>
            @else
            @error('password')
            <p class="short-text-para error-color">{{ $message }}</p>
            @else

            @error('name')
            <p class="short-text-para error-color">{{ $message }}</p>      
            @else

            @error('phoneNumber')
            <p class="short-text-para error-color">{{ $message }}</p>      
                @else
            <p class="short-text-para">join us for more information</p>

            @enderror

            @enderror
            @enderror

            
            @enderror

            

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="fullname" class="input-label">full name</label>
                <input id="fullname" type="text" class="input-field" name="name" required autocomplete="name" autofocus>

                <label for="email" class="input-label">e - mail</label>
                <input id="email" type="email" class="input-field" name="email"  required autocomplete="email" autofocus>

                <label for="number" class="input-label " >contact number</label>
                <input id="number" type="number" class="input-field contact-input"  name="phoneNumber"  required  autofocus>


                <label for="email" class="input-label">Password</label>
                <div class="password-field-container f ac">
                    <input type="password" class="password-filed" name="password" >
                    <i class="im im-eye eye-icon" id="eye-btn"></i>
                </div>

                <label for="email" class="input-label">re-enter Password</label>
                <div class="password-field-container f ac">
                    <input type="password" class="re-password-filed" name="password_confirmation" >
                    <i class="im im-eye eye-icon" id="re-eye-btn"></i>
                </div>

                <div class="form-btn-container f jb ac">
                        <button type="submit" class="submit-btn">register</button>
                </div>
            </form>

            <a href="{{ route('login') }}" class="create-new-account-btn f jc ac">login now</a>

        </div>
    </section>

</body>
</html>