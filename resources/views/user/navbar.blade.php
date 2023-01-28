<!-- USER NAVBAR -->
<div class="navbar">
    <div class="accountpane">
        <img class="profpicture" src="{{ asset('storage/default.jpg') }}" alt="profile_picture">
        <div class="userinfo">{{ucwords(Auth::user()->first_name)}}</div>
    </div>  
    <div class="options">
        <a href="/user-profile" ><div class="option-list">
                Profile
            </div> 
        </a>
    </div>
    <div class="logout">
    <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <button type="button" class="buttonlogout">
        
            {{ __('LOGOUT') }}
        
        </button></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    </div> 
</div>