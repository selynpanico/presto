<!-- navbar -->
<div class="navbar d-flex">
  <a href="{{route('home')}}">
    <img class="logo" id="logo" src="/img/presto-logo.svg" alt="" width="200px">
  </a>
  <div class="row img-uno justify-content-end h-100">
  @guest
    <div class="col-md-3 me-3 mt-1">
    <a href="{{route('login')}}"><img class="img-login" src="/img/presto-login-icon.svg" alt="" width="40%" height="">
    <p class="text-login">login</p></a>      
    </div>
    @else
    <div class="col-md-3 me-3 mt-1">
    <a href="{{route('profile', Auth::user())}}">
    <img class="img-login" src="/img/presto-login-icon.svg" alt="" width="40%" height="">
      <p class="text-login">{{Auth::user()->name}}</p> 
    </div>
    </a>
    @endguest
  </div>
</div>

  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>
  <div id="sidebarMenu" style="z-index: 99;">
    <ul class="sidebarMenuInner">
      <li><a class="title" href="/">home</a></li>
      <li><a class="title" href="#">vai agli articoli</a></li>
      <li><a class="title" href="#">contatti</a></li>
     
      <hr>

      <ul class="auth d-flex">
      @guest
            <li class="fs-4">
              <img class="m-auto" src="/img/presto-login-icon.svg" alt="" width="20%" height="">
              <a href="{{route('login')}}">login</a>
            </li>     
            <li class="fs-4">
              <img class="m-auto" src="/img/presto-register-icon.svg" alt="" width="20%" height="" >
              <a href="{{route('register')}}">registrati</a>
            </li>
        @else
        <li>
          <a href="{{route('announcements.create')}}">Crea Annuncio</a>
        </li>
        <li><a href="/logout" onclick="event.preventDefault(); getElementById('form-logout').submit();">logout</a>
          <form action="{{route('logout')}}" id="form-logout" method="post" class="d-none">
            @csrf
          </form></li>
        @endguest
        </ul>
    </ul> 
  </div>
  <!-- fine navbar -->

