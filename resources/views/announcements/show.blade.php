<x-layout>
   <div class="container my-3 py-3">
       <div class="row justify-content-center">
           <div class="col-12 col-md-6">
            @if(count($announcement->images)==0)
            <!-- Immagine di default -->
            <img src="/img/default.jpg" alt="">
            @elseif(count($announcement->images)==1)
            <div class="d-flex justify-content-center">
              <img src="{{$announcement->images->first()->getUrl()}}" class="rounded" alt="...">
            </div>
            @else          
             <!-- Swiper -->
              <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiperThumbGallery2">
                <div class="swiper-wrapper">
                  @foreach($announcement->images as $image)
                  <div class="swiper-slide">
                    <img src="{{$image->getUrl()}}" />
                  </div>
                  @endforeach
                </div>
                <div class="swiper-button-next color1"></div>
                <div class="swiper-button-prev color2"></div>
              </div>
              <div thumbsSlider="" class="swiper swiperThumbGallery">
                <div class="swiper-wrapper">
                @foreach($announcement->images as $image)
                  <div class="swiper-slide">
                    <img src="{{$image->getUrl()}}" />
                  </div>
                  @endforeach
                </div>
            </div>
            @endif
          </div> <!--Fine col swiper -->
          <!-- EndSwiper -->
          <div class="col-12 col-md-6">
            <h2>{{$announcement->title}}</h2>
            <h2>{{$announcement->user->name}}</h2>
            <h5>{{$announcement->body}}</h5>
            <h5>{{$announcement->price}}</h5>
            <button class="btn btn-success">Acquista ora</button>
          </div>
        </div> <!--End row -->
   </div><!--End container -->

   
   

</x-layout>