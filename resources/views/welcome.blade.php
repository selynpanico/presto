<x-layout>
    @if(count($announcements)>0)
    <h3 class="text-center mb-5">ultimi annunci caricati</h3>
    <!-- Swiper -->
    <div>
        <div class="swiper swiperAnnouncements">
          <div class="swiper-wrapper">
            @foreach($announcements as $announcement)
            <div class="swiper-slide mx-5">
                <!-- Da inserire rotta parametrica per la visione dell'articolo -->
                <!-- <img src="https://via.placeholder.com/300" alt=""> Da inserire IMG dell'immagine -->
                <a href="{{route('announcement.show',$announcement)}}">
                <div class="card bg-dark text-white position-relative">
                    <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->price}}</p>
                        <p class="card-text">{{$announcement->created_at->diffForHumans()}}</p>
                        <a href=""><p class="mt-auto position-absolute bottom-0">{{$announcement->category->name}}</p></a>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
    </div>
    @else


    <x-bladewind.empty-state
        message="Momentaneamente non sono presenti annunci nel nostro sito, aggiungine uno o torna piu tardi">
        <a href="{{route('register')}}" class="btn btn-primary">Registrati per creare un articolo</a>
    </x-bladewind.empty-state>

    @endif


</x-layout>