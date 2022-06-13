<form action="{{route('set_language_locale',$lang)}}" method="POST">
@csrf
    <button type="submit" class="nav-link" style="background-color:transparent; border:none">
        <span class="flag-icon"> <p class="fs-4">| {{$nation}} </p></span>
    </button>
</form>