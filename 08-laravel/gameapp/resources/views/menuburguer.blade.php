@guest 
<nav class="nav">
    <menu>
        <a href="{{ url('login') }}">
            <img src="{{ asset('images/ico-login.svg')}}" alt="">
            Login
        </a>
        <a href="{{ url('register') }}">
            <img src="{{ asset('images/ico-register.svg')}}" alt="">
            Register
        </a>
        <a href="{{ url('catalogue') }}">
            <img src="{{ asset('images/ico-catalogue.svg')}}" alt="">
            Catalogue
        </a>
    </menu>
</nav>
@endguest

@auth
<nav class="nav">
    <figure class="avatar">
        <img class="mask" src="{{ asset('images'). '/' . Auth::user()->photo }}" alt="">
    </figure>
    <h2>{{ Auth::user()->fullname }}</h2>
    <h4>{{ Auth::user()->role}}</h4>
    <menu>
        <a href="{{ url('my-profile') }}">
            <img src="images/profile-icon.png" alt="">
            My profile
        </a>
        <a href="{{ url('dashboard') }}">
            <img src="images/catalogue.png" alt="">
            Catalogue
        </a>
        <a href='javascript:;' onclick="logout.submit();">
            <img src="images/logout.png" alt="Log Out">
            Logout
        </a>
        <form id="logout" action="{{ route('logout')}}" method="POST">
            @csrf
        </form>
    </menu>
</nav>
@endauth