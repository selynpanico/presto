<x-layout>
<x-header />
<h2 class="text-center my-5">ultimi annunci caricati</h2>
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
        message="Momentaneamente non sono presenti annunci nel nostro sito, aggiungine uno o torna piu tardi">
        <a href="{{route('register')}}" class="btn btn-primary">Registrati per creare un articolo</a>
    </x-bladewind.empty-state>
@endif
</x-layout>