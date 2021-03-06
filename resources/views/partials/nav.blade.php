<nav id="nav-main">
    <div id="nav-main-wrapper">
        @guest
            <div class="nav-left">
                <a href="{{ route('index') }}">{{ config('app.name') }}</a>
            </div>
            <div class="nav-right">
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </div>
        @endguest
        @auth
            <div class="nav-left">
                <a href="{{ route('index') }}">{{ config('app.name') }}</a>
            </div>
            <div class="nav-right">
                <a href="{{ route('dashboard.index') }}">{{ __('Dashboard') }}</a>
                <a href="{{ route('user.show') }}">
                    {{ Auth::user()->name }}
                </a>
                <a
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                >
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endauth
    </div>
</nav>
