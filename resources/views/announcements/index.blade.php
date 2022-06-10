<x-layout>


<div class="container">
    <div class="row  justify-content-center">
    <form method="GET"class="d-flex" action="{{route('ricerca.annuncio')}}">
        <input name="searched"class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success"type="submit">Search</button>
    </form>
    </div>
        <div class="row  justify-content-center">
        <div class="col-12 col-md-6 d-flex"> 
            <a href="{{ route('all.announcements')}}"><img class="m-2" src="/img/icone/presto_icona-all.svg" alt="tutte le categorie" width="100%"></a> 
            @foreach($categories as $category)
            <a href="{{route('category.show', $category)}}"><img class="m-2" src="{{ $category->icon}}" alt="{{ $category->name}}" width="100%"></a> 
            @endforeach
        </div>
        </div>
    </div>
    <h3>Risultati per la tua ricerca</h3>
<div class="container">
    <div class="row">
    @forelse($announcements as $announcement)
    <div class="col-12 col-md-4 my-4">
        <x-cards :announcement="$announcement"/>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-warning py-3 shadow">
            <p class="lead">Non ci sono annunci per questa ricerca. </p>
        </div>
    </div>
    @endforelse
    {{$announcements->links('vendor.pagination.custom')}}
            
    
    </div>
</div>

</x-layout>