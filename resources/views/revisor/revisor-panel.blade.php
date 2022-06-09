<x-layout>
  @if($announcement_to_check)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
               <h2>Annuncio di: {{$announcement_to_check->user->name}} {{$announcement_to_check->user->surname}}</h2>

            </div>
        </div>
    </div>
<div class="container">
       <div class="row justify-content-center">
           <div class="col-12 col-md-6">
             <!-- Swiper -->
              <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiperThumbGallery2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                  </div>
                </div>
                <div class="swiper-button-next color1"></div>
                <div class="swiper-button-prev color2"></div>
              </div>
              <div thumbsSlider="" class="swiper swiperThumbGallery">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                  </div>
                </div>
            </div>
          </div> <!--Fine col swiper -->
       </div>
       <!-- EndSwiper -->
   </div>
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-12 col-md-6">
         <h1>{{$announcement_to_check->title}}</h1>
         <h1>{{$announcement_to_check->user->name}}</h1>
         <h5>{{$announcement_to_check->body}}</h5>
         <h5>{{$announcement_to_check->price}}</h5>
         
           <div class="row">
    <div class="col-12 col-md-6">
         <form action="{{route('accept.announcement',['announcement'=>$announcement_to_check])
         }}"method="POST">
         @csrf
         @method('PATCH')
              <button type="submit" class="btn btn-success shadow">Accetta</button>
         </form>
    </div>
    <div class="col-12 col-md-6text-end">
         <form action="{{route('reject.announcement',['announcement'=>$announcement_to_check])
         }}"method="POST">
         @csrf
         @method('PATCH')
             <button type="submit"class="btn btn-danger shadow">Rifiuta</button>
         </form>
    </div>
</div>
       </div>
     </div>
   </div>
   @else

   <x-bladewind.empty-state
    message="Non hai annunci da approvare">
    </x-bladewind.empty-state>
   @endif

</x-layout>