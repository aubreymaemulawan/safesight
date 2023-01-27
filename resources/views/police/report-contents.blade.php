@extends('layouts.app')
@section('title','Report Contents')

@section('police_content')
<!-- STYLES -->
<link rel="stylesheet" href="{{ asset('assets/css/police-report-contents.css') }}" />

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
                    <a href="/police" class="backbuttoncontainer" >
                        <button class="backbutton">
                            <svg viewBox="0 0 20 10" height="10px" width="15px">
                                <path d="M1,5 L25,5"></path>
                                <polyline points="8 1 1 5 8 9"></polyline>
                            </svg>
                            <span>back</span>
                        </button>
                    </a>
                    <div class="dashboardcontainer">
                        <div class="report">
                            <div class="reportimage">
                                SAMPLE PICTURE SENT BY OUR IOT
                            </div>
                            <div class="reportdetails">
                                <h1> HOUSEOWNER</h1>
                                <h2 >Validated Report</h2>
                                <p>NAME : {{$report->unrecognized_faces->user->last_name}}, {{$report->unrecognized_faces->user->first_name}}</p>
                                <p>ADDRESS : {{$report->unrecognized_faces->user->address}}</p>
                                <p>CONTACT NUMBER : {{$report->unrecognized_faces->user->phone_no}}</p>
                                <p>
                                    <?php
                                        $date = new DateTime($report->created_at);
                                        $result = $date->format('F j, Y h:i a');
                                    ?>
                                    DATE AND TIME : {{$result}}         
                                </p>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection

@section('scripts')

@endsection