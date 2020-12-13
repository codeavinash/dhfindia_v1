@extends('layouts.app')

@section('haederFiles')
    <style>
        .formBox{
            width: 100%;
            height: 100vh;
            flex-direction: column;
        }

        input{
            width: 80vw;
            height:40px;
            margin-bottom: 3%;
        }
    </style>
@endsection

@section('mainContent')



                    <div class="formBox f jc ac">
                        <h1 class=" f-jc-ac">forgot password</h1>

                    @if (session('status'))
                        <div class="alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                

@endsection