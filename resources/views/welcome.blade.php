<x-layout>


<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-4 d-flex justify-content-end align-items-center position-relative">
            <div class="text">
                <h1 style="font-size:5rem;width: 200%;">lorem ipsum</h1>
                    <p style="font-weight:bold;" >
                        <span class="word wisteria">tasty.</span>
                        <span class="word pomegranate">fancy.</span>
                        <span class="word belize">wonderful.</span>
                        <span class="word green">beautiful.</span>
                        <span class="word midnight">cheap.</span>
                    </p>
            </div>      
        </div>
        <div class="col-12 col-md-8">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner header-carousel">
                    <div class="carousel-item active">
                    <img src="/img/header/plant-g389750406_1920.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/img/header/plant-g389750406_1920.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/img/header/plant-g389750406_1920.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- <h2 class="text-center mb-5">ultimi annunci caricati</h2> -->

                 @if(count($announcements)>0)

                    <!-- Swiper da Desktop -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                        </div>
                        <div class="swiper d-none d-md-block swiperAnnouncements mb-5" >
                        <div class="swiper-wrapper">
                            @foreach($announcements as $announcement)
                            <div class="swiper-slide mx-5">
                                <!-- Da inserire rotta parametrica per la visione dell'articolo -->
                                <!-- <img src="https://via.placeholder.com/300" alt=""> Da inserire IMG dell'immagine -->
                                <div class="card" style="width:18rem;">
                    <div class="card-categoria my-4 m-auto">
                         <a href="{{route('category.show', $announcement->category)}}">
                                <img class="home-img" src="{{$announcement->category->icon}}" alt="{$announcement->category->name">
                         </a>
                    </div>     
                    <img src="https://picsum.photos/200" class="card-img-top rounded"alt="..." style="height:400px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->body}}</p>
                    <a href="{{route('announcement.show',compact('announcement'))}}"class="btn
                        btn-primary">Visualizza </a>
                        
                        <p class="card-footer">Pubblicato il:{{$announcement->created_at->format('d/
                    m/Y')}}</p>
                </div>
                </div>
                            </div>
                            @endforeach
                        </div>
                            <div class="swiper-button-prev color1"></div>
                            <div class="swiper-button-next color2"></div>
                        </div>
                    </div>
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