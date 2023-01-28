@extends('layouts.app')
@section('title','Dashboard')

@section('user_content')
    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/user-dashboard.css') }}" />

    <!-- USER CONTENT -->
    <div class="contents">
        <div class="dashboardcontainer">
            <div id="realtime_unrecognizedFaces">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("realtime_unrecognizedFaces").innerHTML =
                    this.responseText;
                }
            };
            xhttp.open("GET", "./tbl-user-dashboard", true);
            xhttp.send();
        }
        setInterval(function(){
            loadXMLDoc();
            // 10 seconds
        },10000);
        window.onload = loadXMLDoc;
    </script>
@endsection