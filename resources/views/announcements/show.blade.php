<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper swiperAnnouncements">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide mx-5">
                            <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                        </div>
                        <div class="swiper-slide mx-5">
                            <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                        </div>
                        <div class="swiper-slide mx-5">
                            <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                        </div>
                        <div class="swiper-slide mx-5">
                            <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center">
                {{$announcement->body}}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p class="text-center">
                    {{$announcement->category->name}} {{$announcement->price}}&euro;
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <button class='btn btn-success'>Acquista Ora</button>
            </div>
            
        </div>
    </div>
        
</x-layout>