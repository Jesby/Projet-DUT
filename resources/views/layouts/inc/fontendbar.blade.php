<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="{{asset('images/logo/MC-EC.png')}}" width=150px alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:700px;">
    <ul class="navbar-nav">
      <ul class="navbar-nav ms-auto collapse navbar-collapse" id="navbarNav">
      <li class="nav-item {{ Request::is('/') ? 'active': ''}} ">
          <a class="nav-link font-weight-bold" style="font-size:1.1em; color:#000000;"  href="{{ url ('/')}}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold"  style="font-size:1.1em; color:#000000;" href="{{ url ('categorie')}}">Categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold"  style="font-size:1.1em; color:#000000;" href="{{ url ('cart')}}">Panier</a>
        </li>
        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" >
                                    <a class="nav-link font-weight-bold" style="font-size:1.1em; color:#000000;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" style="font-size:1.1em; color:#000000;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bold" style="font-size:1.1em; color:#000000;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                  <li><a class="dropdown-item font-weight-bold" style="font-size:1.1em; color:#000000;" href="{{url('my-orders')}}">
                                             Historique
                                     </a>
                                        <li><a class="dropdown-item font-weight-bold" style="font-size:1.1em; color:#000000;" href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();" >
                                            {{ __('Deconecter') }}
                                        </a>
                                        <form id="logout-form"  style="font-size:1.1em; color:#000000;" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </li>
                                </ul>
                                </li>
                        @endguest
      </ul>

    </ul>
  </div>
</nav>
