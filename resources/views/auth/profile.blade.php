<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>{{__('ui.logged')}} {{$user->name}} {{$user->surname}}</h2>
        </div>
    </div>
</div>
@if(Auth::user() && Auth::user()->is_revisor  || Auth::user()->is_admin)
<!-- Da inserire fighezza per notifiche revisore -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="position-relative">
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeRevisionedCount()}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    <a href="{{route('revisor-panel')}}" class="btn btn-warning">{{__('ui.revisor_panel')}}</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="position-relative">
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeTrash()}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    @if(session('locale')=='ab')
                    <a href="{{route('trash-can')}}" class="btn btn-warning">Munnezz'</a>
                    @else
                    <a href="{{route('trash-can')}}" class="btn btn-warning"><i class="bi bi-trash3"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row">
            @if(Auth::user()->getAcceptedAnnouncement()>0)
                @foreach(Auth::user()->announcements as $announcement)
                @if($announcement->is_accepted)
                <div class="col-12 col-md-4">
                    <x-cards :announcement="$announcement" :route="Route::currentRouteName()"/>
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