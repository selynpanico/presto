<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
      <h5>LOGO</h2>
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
</nav>



<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>