@extends('layouts.app')
@section('title','Dashboard')

@section('police_content')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/police-dashboard.css') }}" />

    <!-- POLICE CONTENT -->
    <div id="realtime_reportInformation"></div>
@endsection

@section('scripts')
    <script>
        function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("realtime_reportInformation").innerHTML =
                    this.responseText;
                }
            };
            xhttp.open("GET", "./tbl-police-dashboard", true);
            xhttp.send();
        }
        setInterval(function(){
            loadXMLDoc();
            // 10 seconds
        },10000);
        window.onload = loadXMLDoc;
    </script>
@endsection