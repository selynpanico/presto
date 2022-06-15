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
    <div class="container mt-3 mb-5">
        <div class="row justify-content-between">
            <div class="col-8">
                <div class="position-relative">
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                    {{App\Models\Announcement::toBeRevisionedCount()}}
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    <a href="{{route('revisor-panel')}}" class="btn btn-warning">{{__('ui.revisor_panel')}}</a>
                </div>
            </div>
            <div class="col-3">
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
            <div class="swiper swiperAnnouncements mb-5" >
                <div class="swiper-wrapper">
                    @foreach(Auth::user()->announcements as $announcement)
                        @if($announcement->is_accepted)
                            <div class="swiper-slide">
                                <x-cards :announcement="$announcement"/>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="swiper-button-prev color1"></div>
                    <div class="swiper-button-next color2"></div>
                </div>
            @else
            <x-bladewind.empty-state
                message="{{__('ui.profile_empty_state')}}">
            </x-bladewind.empty-state>
            @endif

        </div>
    </div>

    @if(session('locale')=='ab')
        <script>
            window.history.pushState('','','profil\'')
        </script>
        @elseif(session('locale')=='it')                
        <script>
            window.history.pushState('','','profilo')
        </script>
        @elseif(session('locale')=='gb')
        <script>
            window.history.pushState('','','profile')
        </script>
    @endif

</x-layout>