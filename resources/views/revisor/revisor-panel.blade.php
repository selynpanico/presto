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
             @if(count($announcement->images)==0)
            <!-- Immagine di default -->
            @elseif(count($announcement->images)==1)
            <img src="{{$announcement->images->first()->getUrl()}}" class="card-img-top rounded" alt="..." style="height:400px;">
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
            <div class="col-12 col-lg-6 d-flex justify-content-between">
                <form action="{{route('accept.announcement',['announcement'=>$announcement_to_check])}}"method="POST">
                @csrf
                @method('PATCH')
                      <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
                <form action="{{route('reject.announcement',['announcement'=>$announcement_to_check])}}"method="POST">
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