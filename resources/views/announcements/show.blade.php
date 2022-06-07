<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <!-- Swiper -->

                <div
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper2 swiperThumbGallery2"
                >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper2 swiperThumbGallery">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                        <div class="swiper-slide"><img src="https://via.placeholder.com/300" class="card-img" alt="..."></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">{{$announcement->body}}</div>
        </div>
        <div class="row">
            <div class="col-6 text-center">{{$announcement->category->name}} {{$announcement->price}}&euro;</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <button class='btn btn-success'>Acquista Ora</button>
            </div>
        
        </div>
        
    </div>
</x-layout>