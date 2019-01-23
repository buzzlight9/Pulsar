<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">PULSAR</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if(Auth::user())
            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
          @endif
          <li class="nav-item"><a class="nav-link" href="/">BLOG</a></li>
          <li class="nav-item"> 
            @if (Auth::guest())
              <a href="{{ route('login') }}" >
                Login
              </a>
            @else
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            @endif
          </li>
          @if(Auth::guest())
            <li class="nav-item"><a href="{{ route('register')}}">Register</a></li>
          @else
            
          @endif
        </ul>
    </div>
  </div>
</nav>