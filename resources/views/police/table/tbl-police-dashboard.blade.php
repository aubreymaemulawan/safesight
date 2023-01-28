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
                <div> SAFESIGHT HOME SECURITY REPORT NO. {{$rep->id}} - {{$result}}</div>  
            </div>
        </a>
        @endforeach
    </div>
</div>