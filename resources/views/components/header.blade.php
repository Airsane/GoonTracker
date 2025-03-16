<header id="app-header">
    <div><!-- Just spacer... --></div>
    <nav id="app-header-nav">
        <!-- links for scroll -->
        <a href="{{ route('home') }}#home" class="nav-link">HOME</a>
        <a href="{{ route('home') }}#goons-about " class="nav-link">GOONS</a>
        <a href="{{ route('home') }}#goons-spawns" class="nav-link">SPAWNS</a>
    </nav>
    <div id="acc">
        <!-- Login -->
        @if (Auth::check())
            <a href="{{ route('logout') }}" class="acc-link">Log Out</a>
        @else
            <a href="{{ route('login') }}" class="acc-link">Log In</a>
        @endif
    </div>
</header>