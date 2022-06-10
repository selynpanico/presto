<div class="card" style="width: 18rem;">   
    <div class="position-relative">
        <img src="https://picsum.photos/200" class="card-img-top rounded"alt="..." style="height:400px;">
        <div class="card-categoria">
            <a href="{{route('category.show', $announcement->category)}}">
                <img class="home-img" src="{{$announcement->category->icon}}" alt="{$announcement->category->name">
            </a>
        </div>
    </div> 
    <div class="card-body">
        <h5 class="card-title">{{$announcement->title}}</h5>
            <p class="card-text">{{$announcement->body}}</p>
            <a href="{{route('announcement.show',compact('announcement'))}}"class="btn btn-primary">Visualizza </a>               
            <p class="card-text">Pubblicato il:{{$announcement->created_at->format('d/m/Y')}}</p> 
    </div>
</div>