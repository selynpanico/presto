## Da Fixare
Swiper Responsive
Logo Responsive
## Da Aggiungere
Pagina Tutti gli annunci con i filtri e la pagination
Aggiungere nome per categoria
$announcement= Announcement::paginate(9);
php artisan scout:flush "\App\Models\Announcement"
php artisan scout:import "\App\Models\Announcement"
$ php artisan scout:import "\App\Models\Announcement"
## Se trovi delle card inserire 
<x-cards :announcement="$announcement"/>
## Se serve una search bar usa
    <form method="GET" class="d-flex myForm" action="{{route('ricerca.annuncio')}}">
        <div class="input-group mb-3">
            <input type="text"  name="searched" class="form-control" placeholder="Ricerca qualcosa..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" onclick="document.querySelector('.myForm').submit()" id="basic-addon2" style="cursor: pointer;"><i class="bi bi-search colorGradient"></i></span>
        </div>
    </form>


