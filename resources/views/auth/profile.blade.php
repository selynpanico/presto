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
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="position-relative">
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeTrash()}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    <a href="{{route('revisor-panel')}}" class="btn btn-warning"><i class="bi bi-trash3"></i></a>
                </div>
            </div>
        </div>
    </div>
    
@endif

<!-- Da inserire tutti gli annunci dell'utente -->

</x-layout>