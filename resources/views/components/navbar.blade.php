  <!-- navbar -->
  <div class="navbar d-flex" style="z-index: 99;">
    <div class="row w-100">
      <div class="col-6 col-md-6 d-flex justify-content-center align-items-center">
        <a href="{{route('home')}}">
          <img class="logo" id="logo" src="/img/presto-logo.svg" alt="" width="200px">
        </a>
      </div>
      <!-- searchbar  -->
      <div class="col-6 col-md-4 d-flex justify-content-end align-items-center">
        <div class="search-box">
          <button class="btn-search"><i class="bi bi-search"></i></button>
          <input type="text" class="input-search" placeholder="type to search...">
        </div>
      </div>
      <!--fine searchbar  -->
        @guest
      <div class="icon-nav col-2 col-md-2">
        <div class="row h-100">
          <div class="col-md-4">
              <a class="d-flex flex-column justify-content-center align-items-center" href="{{route('login')}}"><img src="/img/presto-login-icon.svg" alt="" width="85%" height="">
              <p class="text-login">login</p></a>      
            </div>
          <div class="col-md-4">
              <a class="d-flex flex-column justify-content-center align-items-center" href="{{route('announcements.create')}}">
              <img src="img/presto-aggiungi-icon.svg" alt="" width="85%" height="">
              <p class="text-login">aggiungi</p></a>
          </div>
        </div>    
      </div>
        @else
      <div class="icon-nav col-2 col-md-2">
        <div class="row h-100 align-items-center">
          <div class="col-md-4">
            <a class="d-flex flex-column justify-content-center align-items-center" href="{{route('profile', Auth::user())}}">
            <img src="/img/presto-login-icon.svg" alt="" width="85%" height="">
            <p class="text-login">{{Auth::user()->name}}</p></a>
          </div>
          <div class="col-md-4">
            <a class="d-flex flex-column justify-content-center align-items-center" href="{{route('announcements.create')}}">
            <img src="img/presto-aggiungi-icon.svg" alt="" width="85%" height="">
            <p class="text-login">aggiungi</p></a>
          </div>    
        </div>  
      </div>
        @endguest
      </div>
    </div>
  </div>

  <input type="checkbox" class="openSidebarMenu noScroll" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>
  <div id="sidebarMenu" style="z-index: 98;">
    <ul class="sidebarMenuInner">
      <li><a class="title" href="/">home</a></li>
      <li><a class="title" href="{{route('all.announcements')}}">vai agli annunci</a></li>
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
        <li><a href="/logout" onclick="event.preventDefault(); getElementById('form-logout').submit();">LogOut</a>
          <form action="{{route('logout')}}" id="form-logout" method="post" class="d-none">
            @csrf
          </form></li>
        @endguest
        </ul>
    </ul> 
  </div>
  <!-- fine navbar -->

