@extends('layouts.app',[ 'eventList' =>$eventList]);



@section('mainContent')

<section class="f-jc-ac">
    <div class="formbox">

        <h3 >
            login
        </h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            
                <label for="email" >{{ __('E-Mail Address') }}</label>
                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                            <strong class="errorText">{{ $message }}</strong>
                @enderror
            
            

            
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password"  name="password" required>
                @error('password')
                    <strong class="errorText">{{ $message }}</strong>
                @enderror
            
            
            
            
             
                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label  for="remember">
                    {{ __('Remember Me') }}
                </label>
            
            <button type="submit" class="submitBtn">
                {{ __('Login') }}
            </button>
           
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
        
        </form>
        <div class="createNew f-jc-ac">
            <a href="{{ route('register') }}" class="f-jc-ac">create new account</a>
        </div>
    </div>
    

</section>

@if (Session::has('joinUsMessage'))
    <div class="globalNotification f-jc-ac">
        <div class="notContainer f-jc-ac">
            {{ Session::get('joinUsMessage') }}
        </div>
        <i class="im im-x-mark-circle cancleBtn"></i>   
    </div>
@endif

@endsection


