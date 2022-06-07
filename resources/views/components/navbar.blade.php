<!-- navbar -->
<div class="navbar">
  <a href="{{route('home')}}">
  <img class="logo" src="/img/presto-logo.svg" alt="" width="200px">
  </a>
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
              <img class="m-auto" src="./img/presto-login-icon.svg" alt="" width="20%" height="">
              <a href="{{route('login')}}">login</a>
            </li>     
            <li class="fs-4">
              <img class="m-auto" src="./img/presto-register-icon.svg" alt="" width="20%" height="" >
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

