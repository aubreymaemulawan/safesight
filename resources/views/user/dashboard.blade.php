@extends('layouts.app')
@section('title','Dashboard')

@section('user_content')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/user-dashboard.css') }}" />

    <div class="mainpage"> 
    <div class="navbar">
        <div class="accountpane">
            <img class="profpicture" src="{{ asset('storage/default.jpg') }}" alt="profile_picture">
            <div class="userinfo">{{Auth::user()->first_name}}</div>
        </div>  
        <div class="options">
            <a href="/user-profile" ><div class="option-list">
                    Profile
                </div> 
            </a>
        </div>
        <div class="logout">
            <button type="button" class="buttonlogout">
            <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('LOGOUT') }}
            </a>
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </div> 
    </div>
    <div class="contents">
        <div class="dashboardcontainer">
        @foreach($faces as $fc)
            <a href="/report-contents-{{$fc->id}}" class="">
            <div class="dashboardcontents">
                <?php
                    $date1 = new DateTime($fc->created_at);
                    $result1 = $date1->format('F j, Y h:i a');
                ?>
                <div> SAFESIGHT HOME SECURITY REPORT - {{$result1}} </div>  
            </div>
            </a>
            @endforeach
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
@endsection