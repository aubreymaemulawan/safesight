<!-- POLICE NAVBAR -->
<div class="navbar">
    <div class="accountpane">
        <img class="profpicture" src="{{ asset('storage/police_logo.jpg') }}" alt="profile_picture">
        <div class="userinfo">{{ucwords(Auth::user()->first_name)}}</div>
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