<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">CAPRI GOURMET</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.index') }}">Menù</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.create') }}">Inserisci il tuo piatto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contattaci') }}">Contattaci</a>
                </li>

                <li class="nav-item dropdown">
                    @auth
                    <button class="btn dropdown-toggle dropdownbtn" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('user.profile') }}">Profilo Personale</a>
                        </li>
                        <li><form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="dropdown-item">Logout</button></form></li>

                    </ul>
                    
                    @else
                    <button class="btn dropdown-toggle dropdownbtn" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, Ospite!
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        
                    </ul>

                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>