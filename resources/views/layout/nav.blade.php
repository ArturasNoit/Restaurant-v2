<nav class="navbar navbar-expand-lg
  {{Request::is('/') ? 'navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light'  : 'navbar-light fixed-top bg-light'}}" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{route('main.page')}}">Taste</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        @if (Request::is('/'))
          <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
          <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
          <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
        @else
          <li class="nav-item"><a href="{{route('dishes.index')}}" class="nav-link">Dishes</a></li>
          <li class="nav-item"><a href="#section-offer" class="nav-link">Mains</a></li>
          <li class="nav-item"><a href="#section-menu" class="nav-link">Users</a></li>
          <li class="nav-item"><a href="#section-menu" class="nav-link">Orders</a></li>
        @endif
        @guest
            <li class="nav-item"><a class="nav-link" href="void(0)" data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="void(0)" data-toggle="modal" data-target="#registerModal">{{ __('Register') }}</a></li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('admin.page')}}">Admin panel</a>
                    <a class="dropdown-item" href="{{('logout') }}"
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
  </div>
</nav>
<!-- END nav -->
