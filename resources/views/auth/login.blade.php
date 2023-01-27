@extends('layouts.app')
@section('title','Login')

@section('login_content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />

    <div class="container">
        <div class="mainpage">  
            <h2 class="logintitle">
                Login to Your 
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="-1500 240 4999 580" style="enable-background:new 0 0 1920 1080; font-family: century othic;" xml:space="preserve">
                    <style type="text/css">
                    .st0{font-family:'CenturyGothic-Bold';}
                    .st1{font-size:383.1015px;}
                    .st2{fill:#FCFCFC;}
                    .st3{fill:#FEFEFE;}
                    .st4{fill:#FA0F0C;}
                    .st5{fill:#FCFCFB;}
                    .st6{fill:#FA100C;}
                    .st7{fill:#F8F5F4;}
                    </style>
                    <a href="/"><text transform="matrix(1.1344 0 0 1 -2.6523 698.0746)" class="st0 st1" style="font-family: Century Gothic;">SafeSight</text></a>
                    <ellipse class="st2" cx="1188.3" cy="443.5" rx="39.5" ry="40.5"/>
                    <g id="Layer_2_00000092421402671916122210000006279272406044781740_">
                    <g id="Layer_1-2">
                        <path class="st3" d="M1112.3,461.3V312h152v149.2L1112.3,461.3L1112.3,461.3z M1114.7,386.1c-0.1,39.6,31.1,72.5,73.1,72.5
                        c41.3,0,73-31.8,73.3-71c0.3-41.3-33-72.7-73.5-72.6C1146.9,315.1,1114.7,347.8,1114.7,386.1L1114.7,386.1z"/>
                        <path class="st4" d="M1114.7,386.1c-0.1-38.3,32.2-71,72.9-71.1c40.5-0.1,73.8,31.3,73.5,72.6c-0.3,39.2-32,71-73.3,71
                        C1145.9,458.6,1114.6,425.7,1114.7,386.1z M1249.8,387.4c0.2-34-26.9-61.2-61-61.5c-36.3-0.4-62.1,28.3-62.8,58.2
                        c-0.9,38,29,63,60.9,63.4C1222.3,447.8,1249.7,419.8,1249.8,387.4L1249.8,387.4z"/>
                        <path class="st3" d="M1249.8,387.4c0,32.5-27.4,60.5-62.9,60.1c-31.9-0.4-61.8-25.4-60.9-63.4c0.7-29.9,26.5-58.7,62.8-58.2
                        C1222.8,326.2,1250,353.4,1249.8,387.4z M1225.4,383.9H1150c-0.9,15.5,4.9,27.5,18.3,35.3c12.6,7.4,26,7.4,38.5,0.1
                        C1220.2,411.5,1226.1,399.4,1225.4,383.9z M1232.1,364.2h-13.9c0,2.6,0.1,5-0.1,7.4c-0.1,1-0.9,2.1-1.3,3.1c-0.4-1-1.1-2-1.1-3
                        c-0.2-2.5,0-5.1,0-7.5h-4.3c0.1,2.1,0.1,4.1,0,6.1c-0.2,1.6,1.2,4.2-2.4,4.5v-10.7h-65.6c0,4.3-0.1,8.5,0,12.6
                        c0.1,2.6,1.7,3.9,4.6,3.9c26.6,0,53.1,0,79.7,0c2.7,0,4.5-1.6,4.5-4.4C1232.2,372.3,1232.2,368.3,1232.1,364.2L1232.1,364.2z"/>
                        <path class="st4" d="M1225.4,383.9c0.7,15.5-5.3,27.6-18.6,35.4c-12.6,7.4-25.9,7.3-38.5-0.1c-13.4-7.8-19.2-19.9-18.3-35.3
                        L1225.4,383.9L1225.4,383.9z M1187.8,392c-5.4,0-10.3,4.6-10.4,9.7c0,5.8,4.7,10.5,10.6,10.6h0c5,0,10.1-5,10.1-9.9
                        C1198.1,397,1193.2,392,1187.8,392L1187.8,392z"/>
                        <path class="st4" d="M1232.2,364.2c0,4.1,0.1,8.1,0,12.1c0,2.7-1.8,4.4-4.5,4.4c-26.6,0-53.1,0-79.7,0c-2.9,0-4.5-1.3-4.6-3.9
                        c-0.1-4.2,0-8.3,0-12.6h65.6v10.7c3.7-0.4,2.3-2.9,2.4-4.5c0.1-2.1,0.2-4.1,0-6.1h4.3c0,2.4-0.1,5,0,7.5c0.1,1,0.7,2,1.1,3
                        c0.5-1,1.2-2.1,1.3-3.1c0.2-2.4,0.1-4.8,0.1-7.4H1232.2L1232.2,364.2z"/>
                        <path class="st5" d="M1187.8,392c5.4,0,10.3,5,10.3,10.3c0,5-5.1,10-10.1,9.9c-5.9,0-10.6-4.7-10.6-10.5v0
                        C1177.4,396.6,1182.4,392,1187.8,392z M1187.8,395c-3.6-0.1-7.2,3.2-7.3,6.8c-0.2,3.6,3.2,7.1,7.1,7.4c3.6,0.2,7.3-3.5,7.4-7.1
                        C1195,398.5,1191.5,395.1,1187.8,395L1187.8,395z"/>
                        <path class="st6" d="M1187.8,395c3.7,0.1,7.1,3.5,7.1,7.1s-3.8,7.3-7.4,7.1c-3.9-0.2-7.3-3.7-7.1-7.4
                        C1180.6,398.2,1184.2,394.9,1187.8,395z M1183.2,400.3c1.3,0.9,2.1,1.9,2.7,1.8c0.8-0.2,1.4-1.2,2-1.9c-0.7-0.6-1.3-1.5-2-1.5
                        C1185.2,398.5,1184.5,399.4,1183.2,400.3L1183.2,400.3z"/>
                        <path class="st7" d="M1183.2,400.3c1.3-0.8,2.1-1.7,2.7-1.6c0.7,0,1.4,1,2,1.5c-0.7,0.7-1.3,1.7-2,1.9
                        C1185.4,402.2,1184.5,401.2,1183.2,400.3z"/>
                    </g>
                    </g>
                </svg>
                Account
            </h2> 
            @error('email')
            <h2 style="color:red; font-family: century gothic;font-size:20px; letter-spacing: 1px; font-weight:1000;" >{{ $message }} </h2>
            @enderror

            @error('password')
            <h2 style="color:red; font-family: century gothic;font-size:20px; letter-spacing: 1px; font-weight:1000;" >{{ $message }} </h2>
            @enderror

            <form method="post">
                @csrf
                <div class="logincontent">
                    <div class="logininfo" >

                        <!-- Email -->
                        <div class="inputbox">
                            <input 
                                id="email" 
                                type="text" 
                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                name="email" 
                                value="{{ old('email') }}" 
                                required autocomplete="email" 
                                autofocusaria-describedby="emailHelp"
                                autofocus
                            >
                            <span>Email</span>
                            <i></i>
                        </div>

                        <!-- Password -->
                        <div class="inputbox2">
                            <input 
                                type="password" name="password" required="" autocomplete="off"
                                id="password" 
                                type="password" 
                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                name="password" 
                                required autocomplete="current-password"
                                aria-describedby="password" 
                                >
                            <span>Password</span>
                            <i></i>
                            
                        </div>
                    </div>
                </div>
                <button type="submit" class="button" >{{ __('Login') }}</button><br>
            </form>

             <a href="/forgotpass" style="text-decoration: none;">
                <button class="forgotpassword">
                    <h3 style="text-decoration: none;">forgotten your password?</h3>
                </button>
            </a> 
        </div>
    </div>
    <div class="subpage">
        <div class="subpagecontent" style="color: white ;">
            <p> New Here? </h1>
            <p> Sign Up and Start Securing your home with us now! With the use of an IoT device Home Security with Facial Recognition! </p>
            <a href="/register" style="text-decoration: none ;"> 
                <button data-text="Awesome" class="buttonreg">
                    <span class="actual-text">&nbsp;REGISTER&nbsp;</span>
                    <span class="hover-text" aria-hidden="true">&nbsp;REGISTER&nbsp;</span>
                </button>
            </a>
        </div>
    </div>
@endsection
