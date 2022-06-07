<!-- navbar -->
<div class="navbar">
  <img class="logo" src="./img/presto-logo.svg" alt="" width="200px">
</div>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li><a class="title" href="/" target="_blank">home</a></li>
      <li><a class="title" href="#" target="_blank">vai agli articoli</a></li>
      <li><a class="title" href="#" target="_blank">contatti</a></li>
     
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
        <li><a href="/logout" onclick="event.preventDefault(); getElementById('form-logout').submit();">logout</a>
          <form action="{{route('logout')}}" id="form-logout" method="post" class="d-none">
            @csrf
          </form></li>
        @endguest
        </ul>
    </ul> 
  </div>
  <!-- fine navbar -->

<!-- <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
   
      <h5>LOGO</h2>
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
</nav> -->


<!-- Modal -->
<!-- <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @guest
        <ul>
            <li>
                <a href="{{route('login')}}">Login</a>
            </li>
            <li>
                <a href="{{route('register')}}">Registrati</a>
            </li>
        </ul>
        @else
        <li>
          <a href="{{route('announcements.create')}}">Nuovo Annuncio</a>
        </li>
        <li>
          <a href="/logout" onclick="event.preventDefault(); getElementById('form-logout').submit();">
            Logout
          </a>
          <form action="{{route('logout')}}" id="form-logout" method="post" class="d-none">
            @csrf
          </form>
        </li>
        @endguest
      </div>
    </div>
  </div>
</div> -->
