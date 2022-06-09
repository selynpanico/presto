<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 d-flex justify-content-end align-items-center position-relative">
            <h1 class="text-header">lorem ipsum dolor sit amet</h1>
        </div>
        <div class="col-12 col-md-6">
            <div class="slider white-grad"></div>
        </div>
    </div>
</div>


    @if(count($announcements)>0)
    <h3 class="text-center mb-5">ultimi annunci caricati</h3>

                    <!-- Swiper da Desktop -->
                
                    <div class="swiper d-none d-md-block swiperAnnouncements mb-5" >
                    <div class="swiper-wrapper">
                        @foreach($announcements as $announcement)
                        <div class="swiper-slide mx-5">
                            <!-- Da inserire rotta parametrica per la visione dell'articolo -->
                            <!-- <img src="https://via.placeholder.com/300" alt=""> Da inserire IMG dell'immagine -->
                            <a href="{{route('announcement.show',$announcement)}}">
                            <div class="card bg-dark text-white position-relative w-100">
                                <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{$announcement->title}}</h5>
                                    <p class="card-text">{{$announcement->price}}</p>
                                    <p class="card-text">{{$announcement->created_at->diffForHumans()}}</p>
                                    <a href="{{route('category.show', $announcement->category)}}">
                                        <img src="{{$announcement->category->icon}}" alt="{{$announcement->category->name}}" style="width: 30px; height:30px" class="position-absolute bottom-0">
                                    </a>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                        <div class="swiper-button-prev color1"></div>
                        <div class="swiper-button-next color2"></div>
                    </div>

                <!-- Swiper da Mobile -->
                <div id="carouselExampleControls" class="carousel slide d-md-none" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($announcements as $announcement)
                            @if($loop->first)
                                <div class="carousel-item active">
                                    <a href="{{route('announcement.show',$announcement)}}">
                                        <div class="card bg-dark text-white position-relative">
                                            <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title">{{$announcement->title}}</h5>
                                                <p class="card-text">{{$announcement->price}}</p>
                                                <p class="card-text">{{$announcement->created_at->diffForHumans()}}</p>
                                                <a href="{{route('category.show', $announcement->category)}}">
                                                    <img src="{{$announcement->category->icon}}" alt="{{$announcement->category->name}}" style="width: 30px; height:30px" class="position-absolute bottom-0">
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            <div class="carousel-item">
                                    <a href="{{route('announcement.show',$announcement)}}">
                                        <div class="card bg-dark text-white position-relative">
                                            <img src="https://via.placeholder.com/300" class="card-img" alt="...">
                                            <div class="card-img-overlay">
                                                <h5 class="card-title">{{$announcement->title}}</h5>
                                                <p class="card-text">{{$announcement->price}}</p>
                                                <p class="card-text">{{$announcement->created_at->diffForHumans()}}</p>
                                                <a href="{{route('category.show', $announcement->category)}}">
                                                    <img src="{{$announcement->category->icon}}" alt="{{$announcement->category->name}}" style="width: 30px; height:30px" class="position-absolute bottom-0">
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <i class="bi bi-arrow-left-circle color1"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle color2"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


    @else


    <x-bladewind.empty-state
        message="Momentaneamente non sono presenti annunci nel nostro sito, aggiungine uno o torna piu tardi">
        <a href="{{route('register')}}" class="btn btn-primary">Registrati per creare un articolo</a>
    </x-bladewind.empty-state>

    @endif


</x-layout>