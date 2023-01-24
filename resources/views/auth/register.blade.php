@extends('layouts.app')
@section('title','Signup')

@section('register_content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}" />

    <div class="container">
        <div class="mainpage">
            <h2 class="pagetitle" style="font-size: 3rem;">Sign up!</h2>
            @error('first_name')
            <h2 style="font-family: century gothic; font-size: 18px; letter-spacing: 2px; color: red ; background-color: white; margin-left:20px; margin-right: 20px;">
                {{ $message}}
            </h2>
            @enderror

            @error('last_name')
            <h2 style="font-family: century gothic; font-size: 18px; letter-spacing: 2px; color: red ; background-color: white; margin-left:20px; margin-right: 20px;">
                {{ $message}}
            </h2>
            @enderror

            
            @error('address')
            <h2 style="font-family: century gothic; font-size: 18px; letter-spacing: 2px; color: red ; background-color: white; margin-left:20px; margin-right: 20px;">
                {{ $message}}
            </h2>
            @enderror

            
            @error('phone_no')
            <h2 style="font-family: century gothic; font-size: 18px; letter-spacing: 2px; color: red ; background-color: white; margin-left:20px; margin-right: 20px;">
                {{ $message}}
            </h2>
            @enderror

            @error('email')
            <h2 style="font-family: century gothic; font-size: 18px; letter-spacing: 2px; color: red ; background-color: white; margin-left:20px; margin-right: 20px;">
                {{ $message}}
            </h2>
            @enderror

            
            @error('password')
            <h2 style="font-family: century gothic; font-size: 18px; letter-spacing: 2px; color: red ; background-color: white; margin-left:20px; margin-right: 20px;">
                {{ $message}}
            </h2>
            @enderror

            <div class="signupcontent">
                <form method="post" class="site-form">
                @csrf     
                    <!-- FIRST NAME -->
                    <div class="inputbox">
                        <h4 class="inputtitle"></h4>
                        <label for="first_name">{{ __('First Name:') }}</label>
                        <input type="text" name="first_name" maxlength="150" minlength="3" autofocus="" required="" id="first_name" class="form-control @error('first_name') is-invalid @enderror">
                        <p style="font-size: 1rem;"></p>
                        <i></i>
                    </div>

                    <!-- LAST NAME -->
                    <div class="inputbox">
                        <h4 class="inputtitle"></h4>
                        <label for="last_name">{{ __('Last Name:') }}</label>
                        <input type="text" name="last_name" maxlength="150" minlength="3" autofocus="" required="" id="last_name" class="form-control @error('last_name') is-invalid @enderror">
                        <p style="font-size: 1rem;"></p>
                        <i></i>
                    </div>

                    <!-- ADDRESS -->
                    <div class="inputbox">
                        <h4 class="inputtitle"></h4>
                        <label for="address">{{ __('Address:') }}</label>
                        <input type="text" name="address" maxlength="150" minlength="3" autofocus="" required="" id="address" class="form-control @error('address') is-invalid @enderror">
                        <p style="font-size: 1rem;"></p>
                        <i></i>
                    </div>

                    <!-- PHONE NUMBER -->
                    <div class="inputbox">
                        <h4 class="inputtitle"></h4>
                        <label for="phone_no">{{ __('Phone Number:') }}</label>
                        <input type="text" name="phone_no" maxlength="150" minlength="3" autofocus="" required="" id="phone_no" class="form-control @error('phone_no') is-invalid @enderror">
                        <p style="font-size: 1rem;"></p>
                        <i></i>
                    </div>
                                    
                    <!-- EMAIL -->
                    <div class="inputbox">
                        <h4 class="inputtitle"></h4>
                        <label for="email">{{ __('Email:') }}</label>
                        <input type="text" name="email" maxlength="150" minlength="3" autofocus="" required="" id="email" class="form-control @error('email') is-invalid @enderror">
                        <p style="font-size: 1rem;"></p>
                        <i></i>
                        
                    </div>

                    <!-- PASSWORD -->
                    <div class="inputbox">
                        <h4 class="inputtitle"></h4>
                        <label for="password">{{ __('Password:') }}</label>
                        <input type="password" name="password" maxlength="150" minlength="3" autofocus="" required="" id="password" class="form-control @error('password') is-invalid @enderror">
                        <p style="font-size: 1rem;"></p>
                        <i></i>
                    </div>

                    <!-- SUBMIT -->
                    <button type="submit" value="Register" class="button" >{{ __('Register') }}</button>
                    <div style="margin-bottom:45px;"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
