@extends('layouts.app')
@section('title','My Profile')

@section('user_content')
   <!-- STYLES -->
   <link rel="stylesheet" href="{{ asset('assets/css/user-profile.css') }}" />
   
   <!-- USER CONTENT -->
    <div class="contents">
        <a href="/user" class="backbuttoncontainer" ><button class="backbutton">
            <svg viewBox="0 0 20 10" height="10px" width="15px">
                <path d="M1,5 L25,5"></path>
                <polyline points="8 1 1 5 8 9"></polyline>
            </svg>
            <span>back</span>
            </button>
        </a>
        <div class="dashboardcontainer">
            <div class="infocontainer">
                <p> Name : {{Auth::user()->last_name}}, {{Auth::user()->first_name}}</p>
                <p> Address : {{Auth::user()->address}}</p>
                <p> Phone Number : {{Auth::user()->phone_no}}</p>
                <p> Email : {{Auth::user()->email}}</p>
            </div>   
        </div>
    </div>
@endsection