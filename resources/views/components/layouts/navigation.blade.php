<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="/img/icono.png" alt="Logotipo" style="width: 25px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('posts.*') ? 'active' : '' }}" href="{{ route('posts.index')}}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact')}}">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('pruebas') ? 'active' : '' }}" href="{{ route('pruebas')}}">Pruebas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about')}}">Acerca de</a>
          </li>
          @guest {{-- Solo lo ven usuarios no autenticados --}}
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('login.*') ? 'active' : '' }}" aria-current="page" href="{{ route('create_login')}}">Registrarse</a>
            </li>
             <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('login.*') ? 'active' : '' }}" aria-current="page" href="{{ route('login')}}">Login</a>
            </li>           
          @endguest
          @auth {{-- Solo lo ven usuarios autenticados --}}         
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="nav-link" type="submit">Logout</button>
            </form>
          </li>               
          @endauth
        </ul> 
      </div>
    </div>
  </nav>

 {{--  @unless (Auth::check())
    You are not signed in.
  @endunless --}}