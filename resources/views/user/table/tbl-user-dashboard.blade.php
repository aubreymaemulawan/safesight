@foreach($faces as $fc)
    <a href="/report-contents-{{$fc->id}}" class="">
        <div class="dashboardcontents">
            <?php
                $date1 = new DateTime($fc->created_at);
                $result1 = $date1->format('F j, Y h:i a');
            ?>
            <div> SAFESIGHT HOME SECURITY REPORT NO. {{$fc->id}} -  {{$result1}} </div>  
        </div>
    </a>
@endforeach