<x-layout>
<x-header />
<h2 class="text-center my-5">{{__('ui.allAnnouncements')}}</h2>
@if(count($announcements)>0)
<!-- Swiper  -->
<div class="swiper swiperAnnouncements mb-5" >
    <div class="swiper-wrapper">
        @dd($moreAnn);
        @foreach($announcements as $announcement)
            <div class="swiper-slide">
                <x-cards :announcement="$announcement"/>
            </div>
        @endforeach
    </div>
    <div class="swiper-button-prev color1"></div>
    <div class="swiper-button-next color2"></div>
</div>
@else
    <x-bladewind.empty-state
        message="{{__('ui.no_announcement')}}">
        <a href="{{route('register')}}" class="btn btn-primary">{{__('ui.register_to_add_announcement')}}</a>
    </x-bladewind.empty-state>
@endif
</x-layout>