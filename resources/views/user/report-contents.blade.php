@extends('layouts.app')
@section('title','Report Contents')

@section('user_content')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/user-report-contents.css') }}" />

    <div class="mainpage"> 
        <div class="navbar">
            <div class="accountpane">
                <img class="profpicture" src="{{ asset('storage/default.jpg') }}" alt="profile_picture">
                <div class="userinfo">{{Auth::user()->first_name}}</div>
            </div>   
            <div class="options">
                <a href="/user-profile" >
                    <div class="option-list">
                        Profile
                    </div> 
                </a>
            </div>
            <div class="logout">
            <a href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><button type="button" class="buttonlogout">
                
                    {{ __('LOGOUT') }}
                
                </button></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </div> 
        </div>
        <div class="contents">
            <a href="/user" class="backbuttoncontainer" >
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
                        <p>NAME : {{Auth::user()->last_name}}, {{Auth::user()->first_name}}</p>
                        <p>ADDRESS : {{Auth::user()->address}}</p>
                        <p>CONTACT NUMBER : {{Auth::user()->phone_no}}</p>
                        <p>
                            <?php
                                $date = new DateTime($faces->created_at);
                                $result = $date->format('F j, Y h:m a');
                            ?>
                            DATE AND TIME : {{$result}}         
                        </p>

                        @if(!$report)
                        <div class="reportbuttoncontainer">
                            <div class="reportbutton2">
                                <button class="reportbutton" id="confirmreportbutton" > 
                                    <span style="color: white;">REPORT</span>
                                </button>
                                <div id="myModal" class="confirmreport">
                                    <div  class="confirmreportcontents">
                                        <span class="close">&times;</span>
                                        <p>Please confirm your 
                                            <span style="color:red;">Police Report</span>
                                                Submission! This will be Forwarded in 
                                            <span style="color:red;">El Salvador Police Department!<span>
                                        </p>
                                        <button onclick="Update({{$faces->id}})" class="reportbutton" style="width:50% ;"> 
                                            <span style="color: white;">CONFIRM REPORT</span>
                                        </button>
                                    </div>
                                </div>
                                <div id="confirmedModal" class="confirmreport">
                                    <div  class="confirmreportcontents">
                                        <p>{{Auth::user()->first_name}}, your report has been succesfully 
                                            Forwarded to <br>
                                            <span style="color:red;">El Salvador Police Department!<span>
                                        </p>
                                        <button onclick="Okay()" class="reportbutton" style="width:50% ;background-color:green;"> 
                                            <span style="color: white;">OK</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="/user">
                                <div class="ignorebutton2">
                                    <button class="ignorebutton"> <span>IGNORE</span>
                                    </button>
                                </div>
                            </a>
                        </div>
                        @else
                        <p>
                            <?php
                                $date1 = new DateTime($report->created_at);
                                $result1 = $date1->format('F j, Y h:m a');
                            ?>
                            STATUS : Reported on {{$result1}}         
                        </p>
                        <br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection

@section('scripts')
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("confirmreportbutton");
    var span = document.getElementsByClassName("close")[0];

    var con_modal = document.getElementById("confirmedModal");
    var span1 = document.getElementsByClassName("close1")[0];


    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }

    
    // btn.onclick = function() {
    //     con_modal.style.display = "block";
    // }

    // span1.onclick = function() {
    //     con_modal.style.display = "none";
    // }

    // window.onclick = function(event) {
    //     if (event.target == con_modal) {
    //     con_modal.style.display = "none";
    //     }
    // }

    function Update(id){
        Controller.Post('/api/report_information/create', { 'unrecognized_faces_id': id })
            .done(function(result) {
                con_modal.style.display = "block";
                modal.style.display = "none";
        });
    }

    function Okay(){
        window.location.reload();
    }

</script>
@endsection