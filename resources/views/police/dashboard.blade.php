@extends('layouts.app')
@section('title','Dashboard')

@section('police_content')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/police-dashboard.css') }}" />
    <div class="mainpage"> 
        <div class="navbar">
            <div class="accountpane">
                <img class="profpicture" src="{{ asset('storage/default.jpg') }}" alt="profile_picture">
                <div class="userinfo">{{Auth::user()->first_name}}</div>
            </div>
            <div class="logout">
            <a href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <button type="button" class="buttonlogout">
                
                    {{ __('LOGOUT') }}
                
                </button>
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </div> 
        </div>
        <div class="contents">
            <div class="metrics">
                <div class="metriccontents">
                    TOTAL NUMBERS OF <br> REPORTS  <br> <h1 style="color:red;">{{$cnt_report}}</h1>
                </div>
                <div class="metriccontents" >
                    REPORT COUNT FOR THE MONTH<br> <h1 style="color:red;">{{$cnt_month}}</h1>
                </div>
            </div>
            
            <div class="dashboardcontainer">
            @foreach($report as $rep)
                <a href="/police-report-contents-{{$rep->id}}" class="">
                    <div class="dashboardcontents">
                        <?php
                            $date = new DateTime($rep->created_at);
                            $result = $date->format('F j, Y h:i a');
                        ?>
                        <div> SAFESIGHT HOME SECURITY REPORT - {{$result}}</div>  
                    </div>
                </a>
                @endforeach
            </div>
        </div>
            
        </div>
    </div>
@endsection