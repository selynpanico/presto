<x-layout>
    @if(count($announcements)>0)
    <!-- Swiper -->
    <div>
        <div class="swiper swiperAnnouncements">
          <div class="swiper-wrapper">
            @foreach($announcements as $announcement)
            <div class="swiper-slide">
                <a href=""> <!-- Da inserire rotta parametrica per la visione dell'articolo -->
                    <img src="https://via.placeholder.com/300" alt=""> <!-- Da inserire IMG dell'immagine -->
                </a>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
    </div>
    @else
        <p>Non ci sono annunci</p>
    @endif


</x-layout>