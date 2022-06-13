<div class="container my-5">
    <div class="row  justify-content-center">
        <div class="col-12 col-md-6 position-relative">
            <form method="GET" class="d-flex myForm" action="{{route('ricerca.annuncio')}}">
                <div class="input-groupCustom mb-3">
                    <input type="text"  name="searched" class="form-control" placeholder="{{__('ui.search_bar')}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <i class="bi bi-search colorGradient provaCustom" onclick="document.querySelector('.myForm').submit()"></i>
                </div>
            </form>
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-12 col-md-6 d-flex">
            <div class='d-none d-md-flex'>
                <a href="{{ route('all.announcements')}}"><img class="m-2" src="/img/icone/presto_icona-all.svg" alt="tutte le categorie" width="100%"></a> 
                @foreach($categories as $category)
                    <a href="{{route('category.show', $category)}}"><img class="m-2" src="{{ $category->icon}}" alt="{{ $category->name}}" width="100%"></a> 
                @endforeach
            </div>
            <div class='d-md-none'>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle d-flex justify-content-center align-items-center my-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Categoria <img class="ms-2" src="/img/icone/presto_icona-all.svg" alt="" width="20px">
                    </button>
                    <ul class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class='dropdown-item' href="{{ route('all.announcements')}}"><img class="m-2" src="/img/icone/presto_icona-all.svg" alt="tutte le categorie" width="20%">Tutti gli annunci</a></li>
                    @foreach($categories as $category)
                    <li><a class='dropdown-item' href="{{route('category.show', $category)}}"><img class="m-2" src="{{ $category->icon}}" alt="{{ $category->name}}" width="20%">
                        <x-category-name categoryName="{{$category->name}}" />
                    </a></li>
                @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>