<div class="card" style="width: 18rem;">   
    <div class="position-relative">
        <!-- Modo nuovo per prendere le IMG -->
                @if(count($announcement->images)>0)
                <img src="{{$announcement->images->first()->getUrl()}}" class="card-img-top rounded" alt="..." style="height:400px;">
                @else
                <img src="/img/default.jpg" alt="">
                @endif
        <div class="card-categoria">
            <a href="{{route('category.show', $announcement->category)}}">
                <img class="home-img" src="{{$announcement->category->icon}}" alt="{$announcement->category->name">
            </a>
        </div>
        <div class="mx-auto lineCard"></div>
    </div> 
    <div class="card-body">
        <h5 class="card-title">{{$announcement->title}}</h5>
            <p class="card-text">{{(strlen($announcement->body) > 20) ? substr($announcement->body, 0, 20) . '...' : $announcement->body;}}</p>
            @if(Route::currentRouteName() == 'home')
            <p class="card-text">Pubblicato {{$announcement->created_at->diffForHumans()}}</p> 
            @else
            <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p> 
            @endif
            <a href="{{route('announcement.show',compact('announcement'))}}"class="btn btn-outline-secondary">visualizza </a>               
    </div>
</div>