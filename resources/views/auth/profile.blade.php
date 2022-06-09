<x-layout>

<h1>Benvenuto {{$user->name}} {{$user->surname}}</h1>
@if(Auth::user() && Auth::user()->is_revisor)
<!-- Da inserire fighezza per notifiche revisore -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="position-relative">
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeRevisionedCount()}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    <a href="{{route('revisor-panel')}}" class="btn btn-warning">Vai al pannello revisore</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="position-relative">
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeTrash()}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    <a href="{{route('trash-can')}}" class="btn btn-warning"><i class="bi bi-trash3"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row">
            @if(count(Auth::user()->announcements)>0)
            @foreach(Auth::user()->announcements as $announcement)
            @if($announcement->is_accepted)
            <div class="col-12 col-md-4">
                <div class="card shadow" style="width:18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top p-3 rounded"alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <pclass="card-text">{{$announcement->body}}</p>
                    <a href="{{route('announcement.show',compact('announcement'))}}"class="btn
                        btn-primary shadow">Visualizza </a>
                        <a href="{{route('category.show', ['category'=>$announcement->category])}}"
                        class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:{{$announcement->category->name}}</a>
                        <pclass="card-footer">Pubblicato il:{{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <x-bladewind.empty-state
                message="Crea un annuncio o attendi che un revisore lo approvi">
            </x-bladewind.empty-state>
            @endif

        </div>
    </div>

<!-- Da inserire tutti gli annunci dell'utente -->

</x-layout>