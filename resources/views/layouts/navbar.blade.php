<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light white">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('public/assets/logo/logo-tomihai.png') }}" height="100" class="d-inline-block align-top"
             alt="tomihai logo">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Acasa
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('rezervari')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/rezervari') }}">Rezervari</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Preturi</a>
            </li>
            <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>

        </ul>
        <ul class="navbar-nav white-text">
{{--            <li class="nav-item {{ (request()->is('autentificare')) ? 'active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('login') }}">Autentificare</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item {{ (request()->is('inregistrare')) ? 'active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">Inregistrare</a>--}}
{{--            </li>--}}
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
