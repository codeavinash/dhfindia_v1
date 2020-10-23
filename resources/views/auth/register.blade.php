@extends('layouts.app')

@section('headerFiles')

<link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">

@endsection

@section('mianContent')


<section class="f-jc-ac">
    <div class="formbox extra">

        <h3 >
            create new account
        </h3>

        <form method="post" action="{{ route('register') }}" class="registerBox ">
            @csrf

            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                        @error('email')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="number" class="col-md-4 col-form-label text-md-right">phone number</label>
                        <input id="number" type="text" name="phoneNumber"  required autocomplete="number">

                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        

                        @error('password')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        <button type="submit" class="submitBtn">
                            {{ __('Register') }}
                        </button>

                    </form>
    </div>
    
</section>  
 
@endsection


