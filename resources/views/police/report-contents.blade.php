@extends('layouts.app')
@section('title','Report Contents')

@section('police_content')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/police-report-contents.css') }}" />

    <!-- POLICE CONTENT -->
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
                    @if($report->unrecognized_faces->image_path==null)
                        <img class="reportimage2" src="{{ asset('../storage/default_no.png') }}" alt="Unrecognized Face"/>
                    @else
                        <?php
                            $str = $report->unrecognized_faces->image_path;
                            $str = ltrim($str, 'public/');
                        ?>
                        <img class="reportimage2" src="{{ asset('../storage/'.$str) }}" alt="Unrecognized Face"/>
                    @endif
                </div>
                <div class="reportdetails">
                    <h1> HOUSEOWNER</h1>
                    <h2 >Validated Report</h2>
                    <p>NAME : {{ucwords($report->unrecognized_faces->user->last_name)}}, {{ucwords($report->unrecognized_faces->user->first_name)}}</p>
                    <p>ADDRESS : {{ucwords($report->unrecognized_faces->user->address)}}</p>
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
@endsection

@section('scripts')

@endsection