<form action="{{route('set_language_locale',$lang)}}" method="POST">
@csrf
    <button type="submit" class="nav-link text-center" style="background-color:transparent; border:none">
        <p class="fs-4">| {{$nation}} </p>
    </button>
</form>