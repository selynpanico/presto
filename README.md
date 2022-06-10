## Da Fixare
Swiper Responsive
Logo Responsive
## Da Aggiungere
Pagina Tutti gli annunci con i filtri e la pagination

 <a href="{{route('announcement.show',$announcement)}}">
                                <div class="card bg-dark text-white position-relative w-100">
                                    <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">{{$announcement->title}}</h5>
                                        <p class="card-text">{{$announcement->price}}</p>
                                        <p class="card-text">{{$announcement->created_at->diffForHumans()}}</p>
                                        <a href="{{route('category.show', $announcement->category)}}">
                                            <img src="{{$announcement->category->icon}}" alt="{{$announcement->category->name}}" style="width: 30px; height:30px" class="position-absolute bottom-0">
                                        </a>
                                    </div>
                                </div>
                                </a>
Aggiungere nome per categoria



$announcement= Announcement::paginate(9);
php artisan scout:flush "\App\Models\Announcement"
<<<<<<< HEAD
php artisan scout:import "\App\Models\Announcement"
=======
$ php artisan scout:import "\App\Models\Announcement"


  /* -webkit-mask: /*4*/
     linear-gradient(#fff 0 0) padding-box, 
     linear-gradient(#fff 0 0); */

       -webkit-mask-composite: xor; /*5'*/
          mask-composite: exclude; /*5*/
>>>>>>> 6585c6febea6683355024c15e53fa29394df062b
